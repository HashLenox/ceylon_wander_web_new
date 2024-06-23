<!--Start - Hotel Name-->
<div class="mb-4 ">
    <h2 class="my-2 text-xl font-bold tracking-tight text-gray-900 capitalize dark:text-white">
        <div class="flex">
            <p>Category <span class="m-2 text-4xl">.</span>
                Other <span class="m-2 text-4xl">.</span>
                Another</p>
        </div>
    </h2>
    <p class="leading-relaxed text-gray-900 dark:text-gray-400">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non ipsum vel nunc
        commodo hendrerit sit amet vel
        nisi. Donec sodales maximus justo, nec dictum lectus malesuada non. Sed auctor ultrices
        tellus non varius.
        <span class="hidden" id="more-text">
            Sed eu enim malesuada, fermentum mi eu, finibus velit. Nam quis blandit velit, vel
            vehicula neque. Etiam eu lorem suscipit, sollicitudin ante at, pharetra quam.
        </span>
    </p>
    <button id="toggle-btn" class="text-blue-500 focus:outline-none">Read More</button>
    <button id="hide-btn" class="hidden mt-4 text-blue-500 focus:outline-none">Hide</button>

    <script>
        const moreTextEl = document.getElementById('more-text');
        const toggleBtnEl = document.getElementById('toggle-btn');
        const hideBtnEl = document.getElementById('hide-btn');

        toggleBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
        });

        hideBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
        });
    </script>

</div>
<!--End - Hotel Name-->
