@extends('layout.layout_master')
@section('content')
    <div class="bg-gray-50">
        <a href="/quiz/entrepreneurProfileTest/01">
            <div class="absolute flex h-12 w-12 items-center justify-center rounded-b-xl bg-indigo-200 text-white">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M205 34.8c11.5 5.1 19 16.6 19 29.2v64H336c97.2 0 176 78.8 176 176c0 113.3-81.5 163.9-100.2 174.1c-2.5 1.4-5.3 1.9-8.1 1.9c-10.9 0-19.7-8.9-19.7-19.7c0-7.5 4.3-14.4 9.8-19.5c9.4-8.8 22.2-26.4 22.2-56.7c0-53-43-96-96-96H224v64c0 12.6-7.4 24.1-19 29.2s-25 3-34.4-5.4l-160-144C3.9 225.7 0 217.1 0 208s3.9-17.7 10.6-23.8l160-144c9.4-8.5 22.9-10.6 34.4-5.4z" />
                </svg>
            </div>
        </a>
        <div class="lg:text-center">
            <h2 class="text-lg font-semibold text-indigo-600">Teste de Perfil
                Empreendedor</h2>
            <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Teste 2 – Auto-avaliação
                de seu perfil empreendedor
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">(habilidades gerenciais)</p>
        </div>
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <ul class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto list-decimal">
                <li>Atribua à sua pessoa uma nota de 1 a 5 para cada uma das competências a seguir.</li>
                <li>Defina qual a importância de cada competência para sua empresa (relativa à sua função/cargo),
                    atribuindo também notas de 1 a 5.</li>
                <li>Calcule a diferença entre as duas notas para cada competência.</li>
                <li>Selecione com um círculo as competências de maior importância para sua empresa.</li>
                <li>Para as competências selecionadas, destaque as que obtiverem as maiores diferenças nos
                    cálculos.</li>
                <li>Essas são as competências que você deverá priorizar, buscando aperfeiçoa-las para obter
                    melhores resultados dentro de sua organização. Assim, defina estratégias para atingir esse
                    objetivo.</li>
            </ul>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Marketing</p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">01 - Avaliação e pesquisa de
                        mercado.</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">02 - Planejamento de marketing. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">03 - Estabelecimento de preços
                        dos produtos.</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">04 - Gerenciamento de vendas.</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">05 - Venda por catálogo/mala
                        direta.</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">06 - Telemarketing.</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">07 - Serviço ao consumidor. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">08 - Gerenciamento de
                        distribuição. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">09 - Planejamento de novos
                        produtos. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">10 - Venda direta. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Operações/produção</p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">11 - Gerenciamento da
                        manufatura. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">12 - Controle de estoques. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">13 - Controle e análise de
                        custos. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-nothing"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">14 - Controle de qualidade. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">15 - Planejamento de produção.</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">16 - Compras de matériaisprimas.</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Finanças </p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">17 - Contabilidade</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">18 - Orçamentos
                    </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">19 - Gerenciamento de fluxo de
                        caixa. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">20 - Gerenciamento de contas a
                        pagar e receber. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">21 - Gerenciamento das
                        relações com fontes de
                        financiamento. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">22 - Negociações para
                        obtenção de recursos
                        financeiros. </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Administração</p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">23 - Resolução de problemas</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">24 - Comunicação </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">25 - Planejamento</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">26 - Tomada de decisão</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">27 - Gerenciamento de projetos</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">28 - Negociação </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">29 - Administração de pessoal</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">30 - Sistema de Informação
                        gerencial </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Relacionamento
            interpessoal/equipes</p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">31 - Liderança, visão, influência
                    </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">32 - Ajuda e coaching</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">33 - Feedback </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">34 - Gerenciamento de conflitos</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Relacionamento
            interpesoal/equipes </p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">35 - Gerenciamento de pessoas</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">36 - Trabalho em equipe</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">37 - Construção de equipes de
                        trabalho</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">38 - Contratos </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">39 - Impostos </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">40 - Seguros</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">41 - Patentes e propriedade
                        intelectual</legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Habilidades específicas
        </p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">42 - </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">43 - </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">44 - </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">45 - </legend>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Sua avaliação</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4">
                        <legend class="contents text-sm font-medium text-gray-900">Importância para sua
                            empresa</legend>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-everything" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-everything">01 para
                                Insuficiente</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">02 para
                                Fraco</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">03 para
                                Regular</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" id="push-email"
                                name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-email">04 para
                                Bom</label>
                        </div>
                        <div class="flex items-center">
                            <input class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                id="push-nothing" name="push-notifications" type="radio">
                            <label class="ml-3 block text-sm font-medium text-gray-700" for="push-nothing">05 para
                                Excelente</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="bg-indigo-600">
        <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between">
                <div class="flex w-0 flex-1 items-center">
                    <span class="flex rounded-lg bg-indigo-800 p-2">
                        <svg class="h-6 w-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                        </svg>
                    </span>
                    <p class="ml-3 truncate font-medium text-white">
                        <span class="md:hidden">We announced a new product!</span>
                        <span class="hidden md:inline">Salve suas respostas para gerar seu perfil!</span>
                    </p>
                </div>
                <div class="order-3 mt-2 w-full flex-shrink-0 sm:order-2 sm:mt-0 sm:w-auto">
                    <a class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-2 text-sm font-medium text-indigo-600 shadow-sm hover:bg-indigo-50"
                        href="#">Salvar</a>
                </div>
            </div>
        </div>
    </div>
@stop
