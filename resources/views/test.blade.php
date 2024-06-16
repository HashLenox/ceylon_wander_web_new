<x-layouts.user-layout>
    <form id="upload-form" class="p-4 md:p-5" method="POST" action="{{ route('addreview') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4 grid grid-cols-2 gap-4">
            <!-- Star rating and description fields -->
            <div class="col-span-2">
                <div class="flex space-x-1">
                    <input type="hidden" name="rating" id="rating-input" value="">

                    <!-- Star SVGs for rating -->
                    @for ($i = 1; $i <= 5; $i++)
                        <svg aria-hidden="true" class="w-8 h-8 text-gray-400 star" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-value="{{ $i }}">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    @endfor

                    {{-- <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const stars = document.querySelectorAll('.star');
                            stars.forEach(star => {
                                star.addEventListener('click', function() {
                                    const rating = this.getAttribute('data-value');
                                    document.getElementById('rating-input').value = rating;
                                    stars.forEach(s => {
                                        if (s.getAttribute('data-value') <= rating) {
                                            s.classList.remove('text-gray-400');
                                            s.classList.add('text-yellow-400');
                                        } else {
                                            s.classList.remove('text-yellow-400');
                                            s.classList.add('text-gray-400');
                                        }
                                    });
                                });
                            });
                        });
                    </script> --}}
                </div>
            </div>

            <div class="col-span-2">
                <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Review
                    description</label>
                <textarea id="review" rows="6" name="review"
                    class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                    required></textarea>
            </div>

            <input type="text" name="id" value="1" hidden>

            <div id="preview-container" class="col-span-2 grid grid-cols-4 gap-2 px-2">
                <!-- Image upload field -->
                <div id="upload-label" class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center sm:w-36 sm:h-36 ...">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" ...>
                                ...
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span
                                    class="font-semibold">Click to upload</span></p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" accept="image/*" name="images[]"
                            multiple>
                    </label>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const uploadLabel = document.getElementById('upload-label');
                    const dropzoneFile = document.getElementById('dropzone-file');
                    const previewContainer = document.getElementById('preview-container');
                    const uploadForm = document.getElementById('upload-form');
                    let imageCount = 0;
                    const maxImages = 4;
                    const imageFiles = new DataTransfer();

                    dropzoneFile.addEventListener('change', function(event) {
                        const files = Array.from(event.target.files);
                        if (imageCount + files.length > maxImages) {
                            alert(`You can only upload up to ${maxImages} images.`);
                            return;
                        }

                        files.forEach(file => {
                            if (!file.type.startsWith('image/')) {
                                alert('Only images are allowed.');
                                return;
                            }

                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const imageDiv = document.createElement('div');
                                imageDiv.classList.add('relative', 'w-36', 'h-36', 'bg-gray-100',
                                    'border', 'border-gray-300', 'rounded-lg', 'overflow-hidden');

                                const img = document.createElement('img');
                                img.src = e.target.result;
                                img.classList.add('object-cover', 'w-full', 'h-full');

                                const removeButton = document.createElement('button');
                                removeButton.textContent = 'Remove';
                                removeButton.classList.add('absolute', 'top-2', 'right-2', 'bg-red-500',
                                    'text-white', 'rounded-full', 'p-1', 'text-xs',
                                    'focus:outline-none');
                                removeButton.addEventListener('click', function() {
                                    previewContainer.removeChild(imageDiv);
                                    imageFiles.items.remove(imageFiles.items.findIndex(i => i
                                        .file === file));
                                    imageCount--;
                                    if (imageCount < maxImages) {
                                        uploadLabel.style.display = 'flex';
                                    }
                                });

                                imageDiv.appendChild(img);
                                imageDiv.appendChild(removeButton);
                                previewContainer.appendChild(imageDiv);
                            };
                            reader.readAsDataURL(file);
                            imageFiles.items.add(file);
                            imageCount++;
                        });

                        if (imageCount >= maxImages) {
                            uploadLabel.style.display = 'none';
                        }

                        dropzoneFile.files = imageFiles.files; // Update the file input with the new files
                        dropzoneFile.value = ''; // Reset file input
                    });

                    uploadForm.addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent the default form submission

                        const formData = new FormData(uploadForm);
                        for (let i = 0; i < imageFiles.files.length; i++) {
                            formData.append('images[]', imageFiles.files[i]);
                        }

                        // You can now use `formData` to send the form data via AJAX, for example:
                        fetch(uploadForm.action, {
                            method: uploadForm.method,
                            body: formData
                        }).then(response => {
                            // Handle the response from the server
                            if (response.ok) {
                                alert('Images uploaded successfully!');
                            } else {
                                alert('Failed to upload images.');
                            }
                        }).catch(error => {
                            console.error('Error uploading images:', error);
                            alert('Error uploading images.');
                        });
                    });
                });
            </script>



            <div class="col-span-2">
                <div class="flex items-center">
                    <input id="review-checkbox" type="checkbox" value=""
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600"
                        required>
                    <label for="review-checkbox" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-400">By
                        publishing this review you agree with the <a href="#"
                            class="text-primary-600 hover:underline dark:text-primary-500">terms and
                            conditions</a>.</label>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-200 pt-4 dark:border-gray-700 md:pt-5">
            <button type="submit" data-modal-toggle="review-modal"
                class="me-2 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add
                review</button>
            <button type="button" data-modal-toggle="review-modal"
                class="me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Cancel</button>
        </div>
    </form>

</x-layouts.user-layout>
