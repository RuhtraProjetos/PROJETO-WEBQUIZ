<div class="relative bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/start">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto sm:h-16" src="{{ asset('storage/image/icon_web_quiz.png') }}" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button
                    class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    type="button" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <a class="text-base font-medium text-gray-500 hover:text-gray-900" href="/start">Início</a>
                <a class="text-base font-medium text-gray-500 hover:text-gray-900" href="#">Documentação</a>
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                <a class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"
                    href="/profile/signin">Entrar</a>
                <a class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700"
                    href="/profile/signup">Cadastrar</a>
            </div>
        </div>
    </div>
    <div class="absolute inset-x-0 top-1 origin-top-right transform p-2 transition md:hidden">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('storage/image/icon_web_quiz.png') }}" alt="Your Company">
                    </div>
                    <div class="-mr-2">
                        <button
                            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            type="button">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="space-y-6 py-6 px-5">
                <div class="grid grid-rows-2 gap-y-4 gap-x-8">
                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="/start">Iníciar</a>

                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="#">Documentação</a>
                </div>
                <div>
                    <a class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700"
                        href="/profile/signup">Entrar</a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a class="text-indigo-600 hover:text-indigo-500" href="/profile/signin">Cadastrar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
