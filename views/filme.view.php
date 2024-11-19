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
                    for ($contador; $contador < $filme->nota; $contador++):
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
            <p class="text-3xl text-gray-300 font-raj font-bold"><?=$filme->nota?></p>
            <p>(5 avaliações)</p>
        </div>

        <p class="text-base text-gray-400 font-nunito mt-20"><?=$filme->descricao?></p>
    </div>
</div>