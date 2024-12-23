<div class="h-screen overflow-hidden flex">
    <div class="m-4 rounded w-1/2 relative h-[95vh]">
        <img src="assets/Login.png" alt="Imagem Login" class="absolute left-0 top-0 object-cover">
        <img src="assets/Logo.png" alt="" class="absolute left-8 top-8">
        <div class="absolute bottom-8 left-8">
            <p class="text-base font-rammeto text-gray-400 font-normal">ab filmes</p>
            <h1 class="text-gray-300 text-xl font-rammeto font-normal max-w-sm mt-3">O guia definitivo para os amantes do cinema</h1>
        </div>
    </div>
    
    <div class="w-1/2 flex items-center justify-center flex-col">
        <div class="max-w-xs flex flex-col items-start">
            <div class="bg-gray-900 flex rounded-md p-1 gap-1 mb-14">
                <a href="/login" class="w-40 h-10 rounded-md inline-block flex items-center text-base font-nunito justify-center">Login</a>
                <a href="/cadastro" class="w-40 h-10 rounded-md bg-slate-800 inline-block flex items-center text-base font-nunito justify-center text-violet-600">Cadastro</a>
            </div>
            <h1 class="font-rammeto text-gray-300 text-2xl mb-5">Crie sua conta</h1>

            <form class="w-full flex flex-col" method="post">
                        
                <div class="flex h-12 border-2 border-gray-900 rounded-md px-4 w-full mt-3">
                    <label for="nome" class="flex items-center justify-center mr-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.0407 16.5625C16.8508 14.5055 15.0172 13.0305 12.8774 12.3312C13.9358 11.7011 14.7582 10.741 15.2182 9.59827C15.6781 8.45554 15.7503 7.19343 15.4235 6.00574C15.0968 4.81805 14.3892 3.77045 13.4094 3.02384C12.4296 2.27722 11.2318 1.87286 10 1.87286C8.76821 1.87286 7.57044 2.27722 6.59067 3.02384C5.6109 3.77045 4.90331 4.81805 4.57654 6.00574C4.24978 7.19343 4.32193 8.45554 4.78189 9.59827C5.24186 10.741 6.06422 11.7011 7.12268 12.3312C4.98284 13.0297 3.14925 14.5047 1.9594 16.5625C1.91577 16.6336 1.88683 16.7128 1.87429 16.7953C1.86174 16.8778 1.86585 16.962 1.88638 17.0429C1.9069 17.1238 1.94341 17.1998 1.99377 17.2663C2.04413 17.3329 2.10731 17.3887 2.17958 17.4304C2.25185 17.4722 2.33175 17.499 2.41457 17.5094C2.49738 17.5198 2.58143 17.5134 2.66176 17.4908C2.74209 17.4682 2.81708 17.4296 2.88228 17.3776C2.94749 17.3255 3.00161 17.2608 3.04143 17.1875C4.51331 14.6437 7.11487 13.125 10 13.125C12.8852 13.125 15.4867 14.6437 16.9586 17.1875C16.9984 17.2608 17.0526 17.3255 17.1178 17.3776C17.183 17.4296 17.258 17.4682 17.3383 17.4908C17.4186 17.5134 17.5027 17.5198 17.5855 17.5094C17.6683 17.499 17.7482 17.4722 17.8205 17.4304C17.8927 17.3887 17.9559 17.3329 18.0063 17.2663C18.0566 17.1998 18.0932 17.1238 18.1137 17.0429C18.1342 16.962 18.1383 16.8778 18.1258 16.7953C18.1132 16.7128 18.0843 16.6336 18.0407 16.5625ZM5.62503 7.49999C5.62503 6.6347 5.88162 5.78883 6.36235 5.06937C6.84308 4.3499 7.52636 3.78915 8.32579 3.45802C9.12521 3.12688 10.0049 3.04024 10.8535 3.20905C11.7022 3.37786 12.4818 3.79454 13.0936 4.4064C13.7055 5.01825 14.1222 5.7978 14.291 6.64647C14.4598 7.49514 14.3731 8.3748 14.042 9.17423C13.7109 9.97366 13.1501 10.6569 12.4306 11.1377C11.7112 11.6184 10.8653 11.875 10 11.875C8.84009 11.8737 7.72801 11.4124 6.90781 10.5922C6.0876 9.77201 5.62627 8.65993 5.62503 7.49999Z" fill="#7A7B9F"/>
                        </svg>
                    </label>
                    <input type="text" id="nome" name="nome" class="bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none placeholder:opacity-55" placeholder="Nome">
                </div>
                <?php 
                    $flash = flashMessage()->get('validacoes_cadastrar');
                    if($flash && isset($flash['nome'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['nome'][0]?></div>
                <?php endif;?>

                <div class="flex h-12 border-2 border-gray-900 rounxded-md px-4 w-full mt-3">
                    <label for="email" class="flex items-center justify-center mr-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 3.75H2.5C2.33424 3.75 2.17527 3.81585 2.05806 3.93306C1.94085 4.05027 1.875 4.20924 1.875 4.375V15C1.875 15.3315 2.0067 15.6495 2.24112 15.8839C2.47554 16.1183 2.79348 16.25 3.125 16.25H16.875C17.2065 16.25 17.5245 16.1183 17.7589 15.8839C17.9933 15.6495 18.125 15.3315 18.125 15V4.375C18.125 4.20924 18.0592 4.05027 17.9419 3.93306C17.8247 3.81585 17.6658 3.75 17.5 3.75ZM10 10.4023L4.10703 5H15.893L10 10.4023ZM7.71172 10L3.125 14.2039V5.79609L7.71172 10ZM8.63672 10.8477L9.57422 11.7109C9.68953 11.8168 9.84035 11.8755 9.99687 11.8755C10.1534 11.8755 10.3042 11.8168 10.4195 11.7109L11.357 10.8477L15.8883 15H4.10703L8.63672 10.8477ZM12.2883 10L16.875 5.79531V14.2047L12.2883 10Z" fill="#7A7B9F"/>
                        </svg>
                    </label>
                    <input type="text" id="email" name="email" class="bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none placeholder:opacity-55" placeholder="E-mail">
                </div>
                <?php 
                    $flash = flashMessage()->get('validacoes_cadastrar');
                    if($flash && isset($flash['email'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['email'][0]?></div>
                <?php endif;?>


                <div class="flex h-12 border-2 border-gray-900 rounded-md px-4 w-full mt-3">
                    <label for="password" class="flex items-center justify-center mr-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 4.375V15.625C3.75 15.7908 3.68415 15.9497 3.56694 16.0669C3.44973 16.1842 3.29076 16.25 3.125 16.25C2.95924 16.25 2.80027 16.1842 2.68306 16.0669C2.56585 15.9497 2.5 15.7908 2.5 15.625V4.375C2.5 4.20924 2.56585 4.05027 2.68306 3.93306C2.80027 3.81585 2.95924 3.75 3.125 3.75C3.29076 3.75 3.44973 3.81585 3.56694 3.93306C3.68415 4.05027 3.75 4.20924 3.75 4.375ZM10.9375 8.63281L9.375 9.14062V7.5C9.375 7.33424 9.30915 7.17527 9.19194 7.05806C9.07473 6.94085 8.91576 6.875 8.75 6.875C8.58424 6.875 8.42527 6.94085 8.30806 7.05806C8.19085 7.17527 8.125 7.33424 8.125 7.5V9.14062L6.5625 8.63281C6.40482 8.58101 6.23302 8.59397 6.0849 8.66884C5.93677 8.74371 5.82446 8.87435 5.77266 9.03203C5.72086 9.18971 5.73382 9.36151 5.80868 9.50963C5.88355 9.65776 6.0142 9.77007 6.17188 9.82188L7.73438 10.3289L6.77031 11.657C6.71937 11.7232 6.6822 11.799 6.66103 11.8798C6.63985 11.9606 6.63508 12.0448 6.64701 12.1275C6.65894 12.2102 6.68733 12.2896 6.73048 12.3611C6.77364 12.4326 6.8307 12.4948 6.89828 12.5439C6.96586 12.593 7.0426 12.628 7.12396 12.647C7.20532 12.6659 7.28965 12.6683 7.37196 12.6541C7.45428 12.6399 7.53291 12.6093 7.60321 12.5642C7.67351 12.5191 7.73405 12.4603 7.78125 12.3914L8.74531 11.0633L9.70937 12.3914C9.75658 12.4603 9.81712 12.5191 9.88742 12.5642C9.95772 12.6093 10.0363 12.6399 10.1187 12.6541C10.201 12.6683 10.2853 12.6659 10.3667 12.647C10.448 12.628 10.5248 12.593 10.5923 12.5439C10.6599 12.4948 10.717 12.4326 10.7601 12.3611C10.8033 12.2896 10.8317 12.2102 10.8436 12.1275C10.8555 12.0448 10.8508 11.9606 10.8296 11.8798C10.8084 11.799 10.7713 11.7232 10.7203 11.657L9.75625 10.3289L11.3188 9.82188C11.4695 9.76582 11.5928 9.65382 11.663 9.50918C11.7333 9.36454 11.7451 9.19839 11.696 9.04526C11.6469 8.89213 11.5407 8.76382 11.3994 8.68701C11.2582 8.61019 11.0927 8.59078 10.9375 8.63281ZM19.2188 9.03437C19.1675 8.87813 19.0568 8.74837 18.9106 8.6732C18.7643 8.59804 18.5944 8.58353 18.4375 8.63281L16.875 9.14062V7.5C16.875 7.33424 16.8092 7.17527 16.6919 7.05806C16.5747 6.94085 16.4158 6.875 16.25 6.875C16.0842 6.875 15.9253 6.94085 15.8081 7.05806C15.6908 7.17527 15.625 7.33424 15.625 7.5V9.14062L14.0625 8.63359C13.9048 8.58231 13.7332 8.59577 13.5855 8.671C13.4377 8.74624 13.3259 8.87709 13.2746 9.03477C13.2233 9.19244 13.2368 9.36404 13.312 9.5118C13.3873 9.65955 13.5181 9.77137 13.6758 9.82266L15.2383 10.3297L14.2742 11.6578C14.2233 11.724 14.1861 11.7997 14.1649 11.8806C14.1438 11.9614 14.139 12.0456 14.1509 12.1283C14.1628 12.2109 14.1912 12.2904 14.2344 12.3619C14.2775 12.4334 14.3346 12.4956 14.4022 12.5447C14.4698 12.5938 14.5465 12.6288 14.6279 12.6477C14.7092 12.6667 14.7936 12.6691 14.8759 12.6549C14.9582 12.6407 15.0368 12.6101 15.1071 12.565C15.1774 12.5199 15.238 12.4611 15.2852 12.3922L16.2492 11.0641L17.2133 12.3922C17.2605 12.4611 17.321 12.5199 17.3913 12.565C17.4616 12.6101 17.5403 12.6407 17.6226 12.6549C17.7049 12.6691 17.7892 12.6667 17.8706 12.6477C17.9519 12.6288 18.0287 12.5938 18.0963 12.5447C18.1638 12.4956 18.2209 12.4334 18.264 12.3619C18.3072 12.2904 18.3356 12.2109 18.3475 12.1283C18.3594 12.0456 18.3547 11.9614 18.3335 11.8806C18.3123 11.7997 18.2752 11.724 18.2242 11.6578L17.2602 10.3297L18.8227 9.82266C18.9795 9.77038 19.1093 9.65807 19.1835 9.51033C19.2578 9.36258 19.2704 9.19144 19.2188 9.03437Z" fill="#7A7B9F"/>
                        </svg>
                    </label>
                    <input type="password" id="password" name="password" class="bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none placeholder:opacity-55" placeholder="Senha">
                </div>
                <?php 
                    $flash = flashMessage()->get('validacoes_cadastrar');
                    if($flash && isset($flash['password'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['password'][0]?></div>
                <?php endif; flashMessage()->unset('validacoes_cadastrar')?>

                <?php if($sucesso = flashMessage()->get('sucesso')):?>
                    <div class="bg-green-700/50 border-2 border-green-700 text-green-500 text-sm rounded-md p-1 mt-3"><?=$sucesso?></div>
                <?php endif; flashMessage()->unset('sucesso');?>

                <button type="submit" class="mt-4 bg-violet-600 rounded-md w-full h-12 text-gray-100 font-nunito font-normal flex items-center justify-center hover:bg-violet-700 transition">Criar</button>
            </form>
        </div>
    </div>
</div>