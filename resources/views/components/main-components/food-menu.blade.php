<div class=" flex justify-center items-center shadow-slate-700 ">

    <div x-data="paginationComponent()" class="w-full p-4 bg-white rounded shadow">

        <!-- Pagination Controls -->
        <div class="flex justify-between items-start my-4 mr-2">

            <div class="flex space-x-2 overflow-x-auto md:overflow-visible whitespace-nowrap md:whitespace-normal">
                <template x-for="page in visiblePages" :key="page">
                    <button @click="goToPage(page)" class="px-4 py-2 w-32 p-4"
                        :class="{
                            ' font-extrabold text-lg text-slate-900 border-b-4 border-slate-900': currentPage ===
                                page,
                            ' text-slate-800 text-lg font-light hover:font-bold': currentPage !== page
                        }">
                        <span x-text="getPageLabel(page)"></span>
                    </button>
                </template>
            </div>

            <div class="flex items-center justify-between space-x-1">
                <button @click="previousPage"
                    class="px-2 py-1 text-gray-700 rounded hover:bg-gray-400 disabled:opacity-50"
                    :disabled="currentPage === 1">
                    <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                </button>
                <button @click="nextPage" class="px-2 py-1 text-gray-700 rounded hover:bg-gray-400 disabled:opacity-50"
                    :disabled="currentPage === totalPages">
                    <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </button>
            </div>
        </div>


        <div class="p-2 grid lg:grid-cols-2  lg:gap-y-8 gap-10" x-show="currentPage === 1">
            <!-- Page 1 Cards -->
            <x-main-components.food-card />
            <x-main-components.food-card />
            <x-main-components.food-card />
            <x-main-components.food-card />
            <x-main-components.food-card />
            <x-main-components.food-card />
            <x-main-components.food-card />
            <x-main-components.food-card />
        </div>

        <div class="p-2 grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6" x-show="currentPage === 2">
            <!-- Page 2 Cards -->
            <x-main-components.food-card />
            <x-main-components.food-card />
            <x-main-components.food-card />
        </div>

        <div class="grid p-2 grid-cols-1 sm:grid-cols-2 gap-4 mb-6" x-show="currentPage === 3">
            <!-- Page 3 Cards -->
            <x-main-components.food-card />
        </div>


    </div>


    <script>
        function paginationComponent() {
            return {
                currentPage: 1,
                totalPages: 3,

                get visiblePages() {
                    const pages = [];
                    const startPage = Math.max(1, this.currentPage -
                        2); // Start showing from 2 pages before the current page
                    const endPage = Math.min(this.totalPages, startPage + 5); // Show 6 pages in total

                    for (let i = startPage; i <= endPage; i++) {
                        pages.push(i);
                    }

                    // Ensure there are always 6 pages displayed
                    while (pages.length < 6) {
                        if (pages[0] > 1) {
                            pages.unshift(pages[0] - 1);
                        } else if (pages[pages.length - 1] < this.totalPages) {
                            pages.push(pages[pages.length - 1] + 1);
                        } else {
                            break;
                        }
                    }

                    return pages;
                },

                previousPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                    }
                },

                nextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                    }
                },

                goToPage(page) {
                    this.currentPage = page;
                },

                getPageLabel(page) {
                    switch (page) {
                        case 1:
                            return 'Rice';
                        case 2:
                            return 'Noodles';
                        case 3:
                            return 'Soup';

                            return 'Side Dishes';
                        default:
                            return '';
                    }
                }
            };
        }
    </script>
</div>
