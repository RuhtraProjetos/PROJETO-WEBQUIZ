@extends('layout.layout_master')
@section('content')
    <div class="bg-gray-50">
        <a href="/quiz/entrepreneurProfileTest">
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
            <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Teste 1 – Auto-avaliação
                de seu perfil empreendedor
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">(ambiente, atitudes e know-how)</p>
        </div>
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <ul class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto list-decimal">
                <li>Atribua à sua pessoa uma nota de 1 a 5 para cada uma das características a seguir e escreva a
                    nota na última coluna.</li>
                <li>Some as notas obtidas para todas as características.</li>
                <li>Analise seu resultado global com base nas explicações ao final.</li>
                <li>Destaque seus principais pontos fortes e pontos fracos.</li>
                <li>Quais dos pontos fortes destacados são mais importantes para o desempenho de suas
                    atribuições atuais na empresa?</li>
                <li>Quais dos pontos fracos destacados deveriam ser trabalhados para que o seu desempenho na
                    empresa seja melhorado? É possível melhora-los?</li>
            </ul>
        </div>
    </div>
    <div class="border">
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Comprometimento e
            determinação
        </p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">01 - Proatividade na tomada de decisão.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">02 - Tenacidade, obstinação.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">03 - Disciplina, dedicação.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">04 - Persistência em resolver problemas.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">05 - Disposição ao sacrifício para atingir
                        metas.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">06 - Imersão total nas atividades que
                        desenvolve.
                    </legend>
                    <div class="mt-4 space-y-4">
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
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Obsessão pelas
            oportunidades
        </p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">07 - Procura ter conhecimento profundo das
                        necessidades dos clientes.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">08 - É dirigido pelo mercado (market
                        driven).</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">09 - Obsessão em criar valor e satisfazer
                        aos clientes.</legend>
                    <div class="mt-4 space-y-4">
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
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Tolerância ao risco,
            ambigüidade e incertezas</p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">10 - Toma riscos calculados (analisa tudo
                        antes de
                        agir).</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">11 - Procura minimizar os riscos.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">12 - Tolerância às incertezas e falta de
                        estrutura.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">13 - Tolerância ao estresse e conflitos.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">14 - Hábil em resolver problemas e
                        integrar soluções.</legend>
                    <div class="mt-4 space-y-4">
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
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Criatividade,
            autoconfiança e habilidade de adaptação</p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">15 - Não-convencional, cabeça aberta,
                        pensador.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">16 - Não se conforma com o status quo.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">17 - Hábil em se adaptar a novas
                        situações.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">18 - Não tem medo de falhar.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">19 - Hábil em definir conceitos e detalhar
                        idéias.</legend>
                    <div class="mt-4 space-y-4">
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
        <p class="mt-2 text-3xl font-bold leading-8 m-4 tracking-tight text-gray-900 sm:text-3xl">Motivação e superação</p>
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                <fieldset class="p-2">
                    <legend class="contents text-base font-medium text-gray-900">20 - Orientação a metas e resultados.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">21 - Dirigido pela necessidade de crescer
                        e atingir
                        melhores resultados.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">22 - Não se preocupa com status e poder.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">23 - Autoconfiança.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">24 - Ciente de suas fraquezas e forças.
                    </legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">25 - Tem senso de humor e procura estar
                        animado.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">26 - Tem iniciativa.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">27 - Poder de autocontrole.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">28 - Transmite integridade e
                        confiabilidade.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">29 - É paciente e saber ouvir.</legend>
                    <div class="mt-4 space-y-4">
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
                    <legend class="contents text-base font-medium text-gray-900">30 - Sabe construir times e trabalhar em
                        equipe.</legend>
                    <div class="mt-4 space-y-4">
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
                        href="/quiz/entrepreneurProfileTest/02">Salvar</a>
                </div>
            </div>
        </div>
    </div>
@stop
