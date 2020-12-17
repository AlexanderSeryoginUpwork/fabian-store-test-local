<x-layouts.app>
    <section class="py-40 bg-gray-100  bg-opacity-50 h-screen">
        <form action="{{ route('store.create.action') }}" method="POST">
            @csrf
            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                        <div class="inline-flex items-center space-x-4">
                            <img
                                class="w-10 h-10 object-cover rounded-full"
                                alt="User avatar"
                                src="https://avatars3.githubusercontent.com/u/72724639?s=400&u=964a4803693899ad66a9229db55953a3dbaad5c6&v=4"
                            />

                            <h1 class="text-gray-600">Create New Store (for Admin only)</h1>
                        </div>
                    </div>
                </div>
                <div class="bg-white space-y-6">
                    <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 max-w-sm mx-auto">Choose</h2>
                        <div class="md:w-2/3 max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">Email</label>
                            <div class="w-full inline-flex border">
                                <input
                                    type="text"
                                    placeholder="Type the title of the new store"
                                    name="name"
                                >
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 mx-auto max-w-sm">Additional info</h2>
                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                            <div>
                                <div class="w-full inline-flex border">
                                    <div class="w-1/12 pt-2 bg-gray-100">
                                        <svg
                                            fill="none"
                                            class="w-6 text-gray-400 mx-auto"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                            />
                                        </svg>
                                    </div>
                                    <textarea
                                        class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                                        placeholder="Please hurry up"
                                        name="additional_info"
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">

                        <div class="md:w-3/12 text-center md:pl-6">
                            <button type="submit" class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" value="1" name="status" />
        </form>
    </section>
</x-layouts.app>

