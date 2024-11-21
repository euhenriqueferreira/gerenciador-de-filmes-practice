<div class="max-w-[1120px] mx-auto gap-x-12 flex">
    <div class="w-2/5 h-[530px] bg-green-400 rounded-lg overflow-hidden">
        <img src="<?=$filme->foto?>" alt="Foto de Capa" class="w-full h-full object-cover">
    </div>
    <div class="w-3/5">
        <a href="/" class="text-gray-500 text-base font-nunito font-normal flex items-center gap-x-2 mt-3">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.4995 10C17.4995 10.1658 17.4337 10.3247 17.3165 10.442C17.1992 10.5592 17.0403 10.625 16.8745 10.625H4.63311L9.1917 15.1828C9.24977 15.2409 9.29584 15.3098 9.32726 15.3857C9.35869 15.4616 9.37486 15.5429 9.37486 15.625C9.37486 15.7071 9.35869 15.7885 9.32726 15.8643C9.29584 15.9402 9.24977 16.0091 9.1917 16.0672C9.13363 16.1253 9.0647 16.1713 8.98883 16.2028C8.91296 16.2342 8.83164 16.2504 8.74952 16.2504C8.66739 16.2504 8.58608 16.2342 8.51021 16.2028C8.43433 16.1713 8.3654 16.1253 8.30733 16.0672L2.68233 10.4422C2.62422 10.3842 2.57812 10.3152 2.54667 10.2393C2.51521 10.1635 2.49902 10.0821 2.49902 10C2.49902 9.91788 2.51521 9.83655 2.54667 9.76067C2.57812 9.6848 2.62422 9.61587 2.68233 9.55782L8.30733 3.93282C8.4246 3.81555 8.58366 3.74966 8.74952 3.74966C8.91537 3.74966 9.07443 3.81555 9.1917 3.93282C9.30898 4.0501 9.37486 4.20916 9.37486 4.37501C9.37486 4.54086 9.30898 4.69992 9.1917 4.8172L4.63311 9.37501H16.8745C17.0403 9.37501 17.1992 9.44086 17.3165 9.55807C17.4337 9.67528 17.4995 9.83425 17.4995 10Z" fill="#7A7B9F"/>
            </svg>
            Voltar
        </a>
        <h1 class="mt-5 text-gray-300 font-bold font-raj text-[32px]">
            <?=$filme->titulo?>
        </h1>
        <p class="text-base text-gray-400 font-nunito mt-4">
            <b>Categoria:</b> <?=$filme->categoria?>
        </p>
        <p class="text-base text-gray-400 font-nunito mb-4 mt-0.5">
            <b>Ano:</b> <?=$filme->ano_de_lancamento?>
        </p>

        <div class="flex gap-3 items-center">
        <ul class="flex items-center">
                <?php 
                    $maximo = 5;
                    $contador = 0;
                    for ($contador; $contador < round($filme->nota_media); $contador++):
                ?>
                    <svg class="w-8 h-8" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="#A85FDD"/>
                    </svg>
                <?php endfor;?>

                <?php 
                    if($contador < $maximo):
                        for($contador; $contador < $maximo; $contador++):
                ?>
                    <svg class="w-8 h-8" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.4234 9.61812C22.3297 9.32986 22.1527 9.0758 21.9148 8.88795C21.6769 8.7001 21.3887 8.58686 21.0866 8.56249L15.5553 8.11624L13.4197 2.95155C13.3042 2.67013 13.1076 2.42941 12.855 2.26C12.6023 2.09058 12.305 2.00012 12.0008 2.00012C11.6966 2.00012 11.3992 2.09058 11.1466 2.26C10.8939 2.42941 10.6974 2.67013 10.5819 2.95155L8.44812 8.11531L2.91406 8.56249C2.61141 8.58809 2.32305 8.70243 2.0851 8.89119C1.84714 9.07994 1.67019 9.33472 1.5764 9.62361C1.4826 9.91249 1.47615 10.2226 1.55784 10.5152C1.63953 10.8077 1.80573 11.0696 2.03562 11.2681L6.25437 14.9084L4.96906 20.3516C4.89717 20.6473 4.91477 20.9577 5.01962 21.2434C5.12447 21.5291 5.31185 21.7771 5.55796 21.9562C5.80407 22.1352 6.09781 22.237 6.40191 22.2488C6.70601 22.2605 7.00674 22.1817 7.26593 22.0222L12.0003 19.1084L16.7375 22.0222C16.9968 22.1798 17.2969 22.2571 17.6001 22.2445C17.9032 22.2318 18.1958 22.1298 18.4411 21.9512C18.6864 21.7726 18.8733 21.5254 18.9784 21.2407C19.0835 20.9561 19.102 20.6467 19.0316 20.3516L17.7416 14.9075L21.9603 11.2672C22.1921 11.069 22.3598 10.8065 22.4422 10.513C22.5247 10.2194 22.5181 9.90796 22.4234 9.61812ZM20.9853 10.1309L16.4197 14.0684C16.3156 14.1582 16.2381 14.2748 16.1958 14.4056C16.1535 14.5364 16.1479 14.6763 16.1797 14.81L17.5747 20.6975C17.5783 20.7056 17.5786 20.7148 17.5757 20.7232C17.5727 20.7315 17.5667 20.7385 17.5587 20.7425C17.5419 20.7556 17.5372 20.7528 17.5231 20.7425L12.3931 17.5878C12.275 17.5152 12.139 17.4767 12.0003 17.4767C11.8616 17.4767 11.7256 17.5152 11.6075 17.5878L6.47749 20.7444C6.46343 20.7528 6.45968 20.7556 6.44187 20.7444C6.43396 20.7403 6.42789 20.7334 6.42493 20.725C6.42196 20.7167 6.42232 20.7075 6.42593 20.6994L7.82093 14.8119C7.85272 14.6781 7.84715 14.5382 7.80483 14.4075C7.7625 14.2767 7.68505 14.1601 7.58093 14.0703L3.01531 10.1328C3.00406 10.1234 2.99374 10.115 3.00312 10.0859C3.01249 10.0569 3.01999 10.0606 3.03406 10.0587L9.02656 9.57499C9.164 9.5632 9.29554 9.51373 9.40668 9.43203C9.51783 9.35032 9.60429 9.23954 9.65656 9.11187L11.9647 3.52343C11.9722 3.50749 11.975 3.49999 11.9975 3.49999C12.02 3.49999 12.0228 3.50749 12.0303 3.52343L14.3441 9.11187C14.3968 9.23958 14.4838 9.35025 14.5955 9.43164C14.7072 9.51303 14.8391 9.56199 14.9769 9.57312L20.9694 10.0569C20.9834 10.0569 20.9919 10.0569 21.0003 10.0841C21.0087 10.1112 21.0003 10.1216 20.9853 10.1309Z" fill="#A85FDD"/>
                    </svg>
                <?php endfor; endif;?>
            </ul>
            <p class="text-3xl text-gray-300 font-raj font-bold"><?=round($filme->nota_media)?></p>
            <p>(<?=$filme->nro_avaliacoes?> avaliações)</p>
        </div>

        <p class="text-base text-gray-400 font-nunito mt-20"><?=$filme->descricao?></p>
    </div>
</div>


<div class="max-w-[1120px] mx-auto flex justify-between mt-36 mb-10">
    <div class="font-raj text-gray-300 text-2xl font-bold">Avaliações</div>
    <button class="open-modal bg-violet-600 rounded-md px-6 h-12 text-gray-100 font-nunito font-normal flex items-center justify-center hover:bg-violet-700 transition">
        <svg class="w-5 h-5 mr-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.4234 9.61812C22.3297 9.32986 22.1527 9.0758 21.9148 8.88795C21.6769 8.7001 21.3887 8.58686 21.0866 8.56249L15.5553 8.11624L13.4197 2.95155C13.3042 2.67013 13.1076 2.42941 12.855 2.26C12.6023 2.09058 12.305 2.00012 12.0008 2.00012C11.6966 2.00012 11.3992 2.09058 11.1466 2.26C10.8939 2.42941 10.6974 2.67013 10.5819 2.95155L8.44812 8.11531L2.91406 8.56249C2.61141 8.58809 2.32305 8.70243 2.0851 8.89119C1.84714 9.07994 1.67019 9.33472 1.5764 9.62361C1.4826 9.91249 1.47615 10.2226 1.55784 10.5152C1.63953 10.8077 1.80573 11.0696 2.03562 11.2681L6.25437 14.9084L4.96906 20.3516C4.89717 20.6473 4.91477 20.9577 5.01962 21.2434C5.12447 21.5291 5.31185 21.7771 5.55796 21.9562C5.80407 22.1352 6.09781 22.237 6.40191 22.2488C6.70601 22.2605 7.00674 22.1817 7.26593 22.0222L12.0003 19.1084L16.7375 22.0222C16.9968 22.1798 17.2969 22.2571 17.6001 22.2445C17.9032 22.2318 18.1958 22.1298 18.4411 21.9512C18.6864 21.7726 18.8733 21.5254 18.9784 21.2407C19.0835 20.9561 19.102 20.6467 19.0316 20.3516L17.7416 14.9075L21.9603 11.2672C22.1921 11.069 22.3598 10.8065 22.4422 10.513C22.5247 10.2194 22.5181 9.90796 22.4234 9.61812ZM20.9853 10.1309L16.4197 14.0684C16.3156 14.1582 16.2381 14.2748 16.1958 14.4056C16.1535 14.5364 16.1479 14.6763 16.1797 14.81L17.5747 20.6975C17.5783 20.7056 17.5786 20.7148 17.5757 20.7232C17.5727 20.7315 17.5667 20.7385 17.5587 20.7425C17.5419 20.7556 17.5372 20.7528 17.5231 20.7425L12.3931 17.5878C12.275 17.5152 12.139 17.4767 12.0003 17.4767C11.8616 17.4767 11.7256 17.5152 11.6075 17.5878L6.47749 20.7444C6.46343 20.7528 6.45968 20.7556 6.44187 20.7444C6.43396 20.7403 6.42789 20.7334 6.42493 20.725C6.42196 20.7167 6.42232 20.7075 6.42593 20.6994L7.82093 14.8119C7.85272 14.6781 7.84715 14.5382 7.80483 14.4075C7.7625 14.2767 7.68505 14.1601 7.58093 14.0703L3.01531 10.1328C3.00406 10.1234 2.99374 10.115 3.00312 10.0859C3.01249 10.0569 3.01999 10.0606 3.03406 10.0587L9.02656 9.57499C9.164 9.5632 9.29554 9.51373 9.40668 9.43203C9.51783 9.35032 9.60429 9.23954 9.65656 9.11187L11.9647 3.52343C11.9722 3.50749 11.975 3.49999 11.9975 3.49999C12.02 3.49999 12.0228 3.50749 12.0303 3.52343L14.3441 9.11187C14.3968 9.23958 14.4838 9.35025 14.5955 9.43164C14.7072 9.51303 14.8391 9.56199 14.9769 9.57312L20.9694 10.0569C20.9834 10.0569 20.9919 10.0569 21.0003 10.0841C21.0087 10.1112 21.0003 10.1216 20.9853 10.1309Z" fill="#ffffff"/>
        </svg>
        Avaliar filme
    </button>
</div>

<?php if(count($avaliacoes) > 0):?>
    <div class="max-w-[1120px] mx-auto flex flex-col items-center gap-3 mb-40">
        <?php foreach($avaliacoes as $avaliacao):?>
            <div class="bg-gray-900 w-full flex p-8 rounded-lg gap-12">
                <div class="w-[264px] flex items-start gap-x-4 border-r-2 border-gray-800">
                    <div class="flex-1">
                        <p class="font-raj text-gray-300 text-base font-bold"><?=$avaliacao->nome?>
                        <?php if($avaliacao->nome == auth()->nome):?>
                            <span class="ml-2 text-xs font-bold text-gray-300 font-nunito bg-violet-600 rounded-full py-px px-2">você</span></p>
                        <?php endif;?>


                        <?php 
                            foreach($numAvaliacoesPorUsuario as $usuario):
                                if($usuario->id == $avaliacao->usuario_id):
                        ?>
                            <p class="mt-1"><?=$usuario->nro_avaliacoes?> filmes avaliados</p>
                        <?php
                                endif;
                            endforeach;
                        ?>
                    </div>
                </div>
                <div class="flex-1">
                    <p><?=$avaliacao->avaliacao?></p>
                </div>

                <div class="w-16 flex items-center gap-1 bg-gray-950/50 px-2 py-1 rounded-md w-fit h-fit">
                    <p class="font-raj text-lg text-gray-300 font-bold">
                        <!-- Média -->
                        <?=$avaliacao->nota?>
                    </p>
                    <p class="text-xs text-gray-300 font-normal flex gap-1 items-end pb-1 text-nowrap">/ 5 
                        <svg class="w-5 h-5" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="#A85FDD"/>
                        </svg>
                    </p>
                </div>
            </div>
        <?php endforeach;?>

    </div>
<?php else:?>
    <div class="max-w-screen-xl mx-auto px-10 col-span-4 mt-4 flex flex-col items-center mb-40">
        <svg class="w-11 h-11" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.8749 8.12501H7.97568L16.4062 5.89923C16.486 5.8782 16.5608 5.84158 16.6264 5.79148C16.6919 5.74137 16.7469 5.67878 16.7882 5.60731C16.8295 5.53584 16.8561 5.4569 16.8667 5.37506C16.8773 5.29322 16.8716 5.21009 16.8499 5.13048L16.2124 2.78673C16.1247 2.4714 15.9162 2.20334 15.6323 2.04059C15.3483 1.87784 15.0116 1.83351 14.6952 1.9172L2.79756 5.05782C2.63914 5.09894 2.49052 5.17126 2.3604 5.27052C2.23027 5.36979 2.12126 5.49403 2.03974 5.63595C1.95777 5.77612 1.90481 5.93135 1.88401 6.0924C1.8632 6.25345 1.87499 6.41704 1.91865 6.57345L2.4999 8.71563C2.4999 8.72657 2.4999 8.73829 2.4999 8.75001V15.625C2.4999 15.9565 2.6316 16.2745 2.86602 16.5089C3.10044 16.7433 3.41838 16.875 3.7499 16.875H16.2499C16.5814 16.875 16.8994 16.7433 17.1338 16.5089C17.3682 16.2745 17.4999 15.9565 17.4999 15.625V8.75001C17.4999 8.58425 17.4341 8.42528 17.3168 8.30807C17.1996 8.19086 17.0407 8.12501 16.8749 8.12501ZM15.0124 3.12501L15.4812 4.84923L13.714 5.31798L11.5171 4.04923L15.0124 3.12501ZM9.80224 4.50001L11.9991 5.76876L9.11318 6.53048L6.91631 5.26329L9.80224 4.50001ZM3.59912 7.98595L3.13037 6.26095L5.20068 5.71407L7.39756 6.98438L3.59912 7.98595ZM16.2499 15.625H3.7499V9.37501H16.2499V15.625Z" fill="#7A7B9F"/>
        </svg>
        <p class="text-gray-400 font-nunito font-normal text-base mt-2">Nenhuma avaliação registrada.</p>
        <p class="text-gray-400 font-nunito font-normal text-base mt-1">Que tal enviar o primeiro comentário?</p>
        <button class="open-modal text-base font-nunito font-normal text-gray-500 flex items-center gap-1 mt-4 p-1">
            <svg class="w-5 h-5 mr-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4234 9.61812C22.3297 9.32986 22.1527 9.0758 21.9148 8.88795C21.6769 8.7001 21.3887 8.58686 21.0866 8.56249L15.5553 8.11624L13.4197 2.95155C13.3042 2.67013 13.1076 2.42941 12.855 2.26C12.6023 2.09058 12.305 2.00012 12.0008 2.00012C11.6966 2.00012 11.3992 2.09058 11.1466 2.26C10.8939 2.42941 10.6974 2.67013 10.5819 2.95155L8.44812 8.11531L2.91406 8.56249C2.61141 8.58809 2.32305 8.70243 2.0851 8.89119C1.84714 9.07994 1.67019 9.33472 1.5764 9.62361C1.4826 9.91249 1.47615 10.2226 1.55784 10.5152C1.63953 10.8077 1.80573 11.0696 2.03562 11.2681L6.25437 14.9084L4.96906 20.3516C4.89717 20.6473 4.91477 20.9577 5.01962 21.2434C5.12447 21.5291 5.31185 21.7771 5.55796 21.9562C5.80407 22.1352 6.09781 22.237 6.40191 22.2488C6.70601 22.2605 7.00674 22.1817 7.26593 22.0222L12.0003 19.1084L16.7375 22.0222C16.9968 22.1798 17.2969 22.2571 17.6001 22.2445C17.9032 22.2318 18.1958 22.1298 18.4411 21.9512C18.6864 21.7726 18.8733 21.5254 18.9784 21.2407C19.0835 20.9561 19.102 20.6467 19.0316 20.3516L17.7416 14.9075L21.9603 11.2672C22.1921 11.069 22.3598 10.8065 22.4422 10.513C22.5247 10.2194 22.5181 9.90796 22.4234 9.61812ZM20.9853 10.1309L16.4197 14.0684C16.3156 14.1582 16.2381 14.2748 16.1958 14.4056C16.1535 14.5364 16.1479 14.6763 16.1797 14.81L17.5747 20.6975C17.5783 20.7056 17.5786 20.7148 17.5757 20.7232C17.5727 20.7315 17.5667 20.7385 17.5587 20.7425C17.5419 20.7556 17.5372 20.7528 17.5231 20.7425L12.3931 17.5878C12.275 17.5152 12.139 17.4767 12.0003 17.4767C11.8616 17.4767 11.7256 17.5152 11.6075 17.5878L6.47749 20.7444C6.46343 20.7528 6.45968 20.7556 6.44187 20.7444C6.43396 20.7403 6.42789 20.7334 6.42493 20.725C6.42196 20.7167 6.42232 20.7075 6.42593 20.6994L7.82093 14.8119C7.85272 14.6781 7.84715 14.5382 7.80483 14.4075C7.7625 14.2767 7.68505 14.1601 7.58093 14.0703L3.01531 10.1328C3.00406 10.1234 2.99374 10.115 3.00312 10.0859C3.01249 10.0569 3.01999 10.0606 3.03406 10.0587L9.02656 9.57499C9.164 9.5632 9.29554 9.51373 9.40668 9.43203C9.51783 9.35032 9.60429 9.23954 9.65656 9.11187L11.9647 3.52343C11.9722 3.50749 11.975 3.49999 11.9975 3.49999C12.02 3.49999 12.0228 3.50749 12.0303 3.52343L14.3441 9.11187C14.3968 9.23958 14.4838 9.35025 14.5955 9.43164C14.7072 9.51303 14.8391 9.56199 14.9769 9.57312L20.9694 10.0569C20.9834 10.0569 20.9919 10.0569 21.0003 10.0841C21.0087 10.1112 21.0003 10.1216 20.9853 10.1309Z" fill="#45455F"/>
            </svg>
            Avaliar filme
        </button>
    </div>
<?php endif;?>



<div id="modal-avaliacao" class="z-10 w-screen h-screen fixed bg-black/70 left-0 top-0 hidden items-center justify-center">
    <form class="w-[600px] h-[570px] bg-gray-950 border border-gray-800 rounded-lg p-10 relative" method="post" action="/cadastrar-avaliacao?id=<?=$filme->id?>">
        <button id="fecharModal" class="bg-gray-800 w-8 h-8 rounded-md flex items-center justify-center absolute  right-8 top-8">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.067 15.1828C16.1251 15.2409 16.1712 15.3098 16.2026 15.3857C16.234 15.4615 16.2502 15.5429 16.2502 15.625C16.2502 15.7071 16.234 15.7884 16.2026 15.8643C16.1712 15.9402 16.1251 16.0091 16.067 16.0672C16.009 16.1252 15.94 16.1713 15.8642 16.2027C15.7883 16.2342 15.707 16.2503 15.6249 16.2503C15.5427 16.2503 15.4614 16.2342 15.3855 16.2027C15.3097 16.1713 15.2407 16.1252 15.1827 16.0672L9.99986 10.8836L4.81705 16.0672C4.69977 16.1844 4.54071 16.2503 4.37486 16.2503C4.20901 16.2503 4.04995 16.1844 3.93267 16.0672C3.8154 15.9499 3.74951 15.7908 3.74951 15.625C3.74951 15.4591 3.8154 15.3001 3.93267 15.1828L9.11627 9.99998L3.93267 4.81717C3.8154 4.69989 3.74951 4.54083 3.74951 4.37498C3.74951 4.20913 3.8154 4.05007 3.93267 3.93279C4.04995 3.81552 4.20901 3.74963 4.37486 3.74963C4.54071 3.74963 4.69977 3.81552 4.81705 3.93279L9.99986 9.11639L15.1827 3.93279C15.2999 3.81552 15.459 3.74963 15.6249 3.74963C15.7907 3.74963 15.9498 3.81552 16.067 3.93279C16.1843 4.05007 16.2502 4.20913 16.2502 4.37498C16.2502 4.54083 16.1843 4.69989 16.067 4.81717L10.8835 9.99998L16.067 15.1828Z" fill="#7A7B9F"/>
            </svg>
        </button>
        <div class="font-raj text-gray-300 text-2xl font-bold mb-8">Avaliar filme</div>
        <div class="flex gap-x-8">
            <img src="<?=$filme->foto?>" alt="" class="w-36 h-44 rounded-md">
            <div>
                <h3 class="text-gray-300 font-bold font-raj text-2xl">
                    <?=$filme->titulo?>
                </h3>
                <p class="text-sm text-gray-400 font-nunito mt-4">
                    <b>Categoria:</b> <?=$filme->categoria?>
                </p>
                <p class="text-sm text-gray-400 font-nunito mb-4 mt-0.5">
                    <b>Ano:</b> <?=$filme->ano_de_lancamento?>
                </p>
                <p class="text-sm text-gray-400 font-nunito mb-4 mt-0.5">
                    Sua avaliação:
                </p>
                <div class="flex gap-1">
                    <?php for($i = 1; $i < 6; $i++):?>
                        <div class="">
                            <label for="nota_<?=$i?>" class="cursor-pointer check-box">
                                <svg  class="w-7 h-7" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.4234 9.61812C22.3297 9.32986 22.1527 9.0758 21.9148 8.88795C21.6769 8.7001 21.3887 8.58686 21.0866 8.56249L15.5553 8.11624L13.4197 2.95155C13.3042 2.67013 13.1076 2.42941 12.855 2.26C12.6023 2.09058 12.305 2.00012 12.0008 2.00012C11.6966 2.00012 11.3992 2.09058 11.1466 2.26C10.8939 2.42941 10.6974 2.67013 10.5819 2.95155L8.44812 8.11531L2.91406 8.56249C2.61141 8.58809 2.32305 8.70243 2.0851 8.89119C1.84714 9.07994 1.67019 9.33472 1.5764 9.62361C1.4826 9.91249 1.47615 10.2226 1.55784 10.5152C1.63953 10.8077 1.80573 11.0696 2.03562 11.2681L6.25437 14.9084L4.96906 20.3516C4.89717 20.6473 4.91477 20.9577 5.01962 21.2434C5.12447 21.5291 5.31185 21.7771 5.55796 21.9562C5.80407 22.1352 6.09781 22.237 6.40191 22.2488C6.70601 22.2605 7.00674 22.1817 7.26593 22.0222L12.0003 19.1084L16.7375 22.0222C16.9968 22.1798 17.2969 22.2571 17.6001 22.2445C17.9032 22.2318 18.1958 22.1298 18.4411 21.9512C18.6864 21.7726 18.8733 21.5254 18.9784 21.2407C19.0835 20.9561 19.102 20.6467 19.0316 20.3516L17.7416 14.9075L21.9603 11.2672C22.1921 11.069 22.3598 10.8065 22.4422 10.513C22.5247 10.2194 22.5181 9.90796 22.4234 9.61812ZM20.9853 10.1309L16.4197 14.0684C16.3156 14.1582 16.2381 14.2748 16.1958 14.4056C16.1535 14.5364 16.1479 14.6763 16.1797 14.81L17.5747 20.6975C17.5783 20.7056 17.5786 20.7148 17.5757 20.7232C17.5727 20.7315 17.5667 20.7385 17.5587 20.7425C17.5419 20.7556 17.5372 20.7528 17.5231 20.7425L12.3931 17.5878C12.275 17.5152 12.139 17.4767 12.0003 17.4767C11.8616 17.4767 11.7256 17.5152 11.6075 17.5878L6.47749 20.7444C6.46343 20.7528 6.45968 20.7556 6.44187 20.7444C6.43396 20.7403 6.42789 20.7334 6.42493 20.725C6.42196 20.7167 6.42232 20.7075 6.42593 20.6994L7.82093 14.8119C7.85272 14.6781 7.84715 14.5382 7.80483 14.4075C7.7625 14.2767 7.68505 14.1601 7.58093 14.0703L3.01531 10.1328C3.00406 10.1234 2.99374 10.115 3.00312 10.0859C3.01249 10.0569 3.01999 10.0606 3.03406 10.0587L9.02656 9.57499C9.164 9.5632 9.29554 9.51373 9.40668 9.43203C9.51783 9.35032 9.60429 9.23954 9.65656 9.11187L11.9647 3.52343C11.9722 3.50749 11.975 3.49999 11.9975 3.49999C12.02 3.49999 12.0228 3.50749 12.0303 3.52343L14.3441 9.11187C14.3968 9.23958 14.4838 9.35025 14.5955 9.43164C14.7072 9.51303 14.8391 9.56199 14.9769 9.57312L20.9694 10.0569C20.9834 10.0569 20.9919 10.0569 21.0003 10.0841C21.0087 10.1112 21.0003 10.1216 20.9853 10.1309Z" fill="#A85FDD"/>
                                </svg>
                            </label>
                            <input type="checkbox" name="nota" id="nota_<?=$i?>" value="<?=$i?>" class="hidden">
                        </div>
                    <?php endfor;?>
                </div>
                <?php 
                    $flash = flashMessage()->get('flash_validacoes_criar_avaliacao');
                    if($flash && isset($flash['nota'])):
                ?>
                    <div class="text-rose-500 text-xs mt-px"><?=$flash['nota'][0]?></div>
                <?php endif;?>
            </div>
        </div>
        
        <textarea type="text" id="avaliacao" name="avaliacao" class="min-h-36 resize-none rounded-md w-full mt-3 border-2 border-gray-900 p-3 pl-4 bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none placeholder:opacity-55" placeholder="Descrição"></textarea>
        <?php 
            $flash = flashMessage()->get('flash_validacoes_criar_avaliacao');
            if($flash && isset($flash['avaliacao'])):
        ?>
            <div class="text-rose-500 text-xs mt-px"><?=$flash['avaliacao'][0]?></div>
        <?php endif; flashMessage()->unset('flash_validacoes_criar_avaliacao')?>



        <div class="w-full flex justify-end mt-6">
            <button type="submit" class="bg-violet-600 rounded-md px-5 h-12 text-gray-100 font-nunito font-normal flex items-center justify-center hover:bg-violet-700 transition">Publicar</button>
        </div>
    </form>
</div>
<script src="../scripts/modal_avaliacoes.js"></script>