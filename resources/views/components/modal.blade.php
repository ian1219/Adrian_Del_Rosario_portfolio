<!-- modal.blade.php -->
<div id="skillModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white p-8 max-w-md w-full rounded shadow-lg">
                    <h2 class="text-2xl font-bold mb-4" id="modalSkillTitle"></h2>
                    <p id="modalSkillDescription"> </p>
                    <div class="mt-4 flex justify-end">
                        <button id="closeSkillModal" class="px-4 py-2 bg-gray-800 text-white rounded-md">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

