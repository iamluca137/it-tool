<header class="py-2">
    <div class="flex h-16 w-full items-center gap-8 mb-5 py-2">
        <div class="flex justify-start items-center gap-4">
            <a class="block md:hidden text-teal-600 text-lg font-medium cursor-pointer" onclick="toggleSidebar()">
                <i class="fa-solid fa-bars"></i>
            </a>
            <a class="block text-teal-600 text-lg font-medium" href="{{ route('home') }}">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>

        <div class="flex items-center justify-between w-full">
            <form class="flex items-center grow">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="text" id="tool-search"
                        class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded focus:ring-0 focus:border-teal-600 block w-full ps-10 px-2.5 py-1.5"
                        placeholder="Search" />
                </div>
            </form>

            <div class="flex items-center ms-4">
                <a class="group relative inline-flex items-center overflow-hidden rounded-full bg-teal-600 px-6 py-1.5 text-white focus:outline-none focus:ring active:bg-teal-500"
                    href="#">
                    <span class="text-sm font-medium transition-all group-hover:me-4">
                        <span class="me-3">Buy me a coffee</span>
                        <i class="fa-solid fa-heart"></i>
                    </span>
                </a>
            </div>
        </div>

    </div>
</header>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar-menu');
        sidebar.classList.toggle('-translate-x-full');
    }

    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar-menu');
        const toggleButton = document.querySelector('[onclick="toggleSidebar()"]');
        if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
            sidebar.classList.add('-translate-x-full');
        }
    });
</script>
