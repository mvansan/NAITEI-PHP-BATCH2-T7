@props(['user'])
<div
    class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
    id="edit-{{ $user->id }}-modal" tabindex="-1" aria-hidden="true">
    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div
                class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                <h3 class="text-xl font-semibold dark:text-white">
                    Edit user
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="edit-{{ $user->id }}-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form
                action="{{ route('admin.users.update', ['user' => $user->id]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Modal body -->
                <div class="p-6 space-y-6">

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                Name</label>
                            <input type="text" name="first_name"
                                   value="{{ $user->first_name }}" id="first_name"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="{{ $user->first_name }}" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last_name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                Name</label>
                            <input type="text" name="last_name"
                                   value="{{ $user->last_name }}" id="last_name"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="{{ $user->last_name }}" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email"
                                   value="{{ $user->email }}" id="email"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="{{ $user->email }}" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="telephone"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
                            <input type="text" name="telephone"
                                   value="{{ $user->telephone }}" id="telephone"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="{{ $user->telephone }}" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="username"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username"
                                   value="{{ $user->username }}" id="username"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="{{ $user->username }}" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="new_password"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                Password</label>
                            <input type="password" name="new_password"
                                   value="••••••••" id="new_password"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                   placeholder="••••••••" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Upload file</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="file_input" type="file" name="new_image">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <button
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="submit">Save all
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
