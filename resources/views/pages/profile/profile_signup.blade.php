@extends('layout.layout_sign')
@section('content')
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Cadastre-se</h2>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input name="remember" type="hidden" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label class="sr-only" for="email-address">User</label>
                        <input
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            id="user" name="user" type="text" autocomplete="user" required
                            placeholder="Nome de Perfil">
                    </div>
                    <div>
                        <label class="sr-only" for="email-address">Email address</label>
                        <input
                            class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            id="email-address" name="email" type="email" autocomplete="email" required
                            placeholder="Email address">
                    </div>
                    <div>
                        <label class="sr-only" for="password">Confirm-Password</label>
                        <input
                            class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            id="confirm-password" name="confirm-password" type="password"
                            autocomplete="current-confirm-password" required placeholder="Confirme a Senha">
                    </div>
                    <div>
                        <label class="sr-only" for="password">Password</label>
                        <input
                            class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            id="password" name="password" type="password" autocomplete="current-password" required
                            placeholder="Senha">
                    </div>
                </div>
                <div>
                    <button
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        type="submit">
                        Cadastrar-se
                    </button>
                    <div
                        class="group relative flex w-full justify-center rounded-md border border-transparent mt-2 bg-white py-2 px-4 text-sm font-medium text-indigo-600 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <a href="/start">Voltar ao Início</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
