<?php $this->layout('_layout'); ?>

<?php $this->start('hero') ?>
    <a href="#" class="inline-flex items-center text-white bg-gray-800 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-auth0 rounded-full">Logged In</span>
        <span class="ml-4 text-sm">PHP Quickstart</span>
        <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
    </a>

    <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
        <span class="md:block">Welcome</span>
        <span class="text-auth0 md:block">
            <?php if(isset($session->user['picture'])): ?>
                <span class="inline-block relative">
                    <img class="h-12 w-12 rounded-full" src="<?php echo $session->user['picture'] ?>" alt="">
                </span>
            <?php endif; ?>

            <?php echo $session->user['email'] ?>
        </span>
    </h1>

    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">You successfully authenticated as <span class="font-mono bg-gray-800 p-1 rounded text-sm"><?php echo $session->user['sub'] ?></span>.</p>
<?php $this->stop() ?>

<?php $this->start('body') ?>
    <div class="mb-16 w-full lg:grid lg:grid-cols-12 lg:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
                <a href="#user" class="bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium" aria-current="page">
                    <svg class="text-indigo-500 group-hover:text-indigo-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="truncate">
                        User Information
                    </span>
                </a>

                <a href="#credentials" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <span class="truncate">
                        Credentials
                    </span>
                </a>

                <a href="#cookies" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    <span class="truncate">
                        Cookies
                    </span>
                </a>
            </nav>
        </aside>

        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
            <div id="management_get_user">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900"><span class="inline-block align-middle bg-indigo-600 text-white text-xs py-2 px-4 rounded-full">Management API</span> <span class="font-mono inline-block align-middle">GET</span> /api/v2/users/{id}</h3>
                        </div>

                        <div class="px-4 py-5 sm:px-6">
                            <textarea name="management_get_user" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><?php echo htmlspecialchars(print_r($managementUserProfile, true)) ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post" id="management_patch_user">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900"><span class="inline-block align-middle bg-indigo-600 text-white text-xs py-2 px-4 rounded-full">Management API</span> <span class="font-mono inline-block align-middle">PATCH</span> /api/v2/users/{id}</h3>
                        </div>

                        <div class="px-4 py-5 sm:px-6">
                            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update `quickstart_example` Metadata</button>
                        </div>
                    </div>
                </div>
            </form>

            <div id="user">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">User Information</h3>
                            <p class="mt-1 text-sm text-gray-500">Retrieve these details using <span class="font-mono text-xs">Auth0::getCredentials()</span> or <span class="font-mono text-xs">Auth0::getUser()</span>.</p>
                        </div>

                        <div class="px-4 py-5 sm:px-6 grid grid-cols-6 gap-6">
                            <?php foreach($session->user as $key => $data): ?>
                                <?php $row = uniqid(); ?>

                                <?php if(is_string($data)): ?>
                                    <div class="col-span-6">
                                        <label for="<?php echo $row ?>" class="block text-sm font-medium text-gray-700"><?php echo $key ?></label>
                                        <input value="<?php echo htmlspecialchars($data) ?>" type="text" readonly="true" name="<?php echo $row ?>" id="<?php echo $row ?>" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                <?php endif ?>

                                <?php if(is_array($data)): ?>
                                    <div class="col-span-6">
                                        <label for="<?php echo $row ?>" class="block text-sm font-medium text-gray-700"><?php echo $key ?></label>
                                        <textarea name="<?php echo $row ?>" id="<?php echo $row ?>" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><?php echo htmlspecialchars(print_r($data, true)) ?></textarea>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="credentials">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Credentials</h3>
                            <p class="mt-1 text-sm text-gray-500">Retrieve these using <span class="font-mono text-xs">Auth0::getCredentials()</span>, or <span class="font-mono text-xs">Auth0::getIdToken()</span>, <span class="font-mono text-xs">Auth0::getAccessToken()</span>, <span class="font-mono text-xs">Auth0::getAccessTokenScope()</span>, <span class="font-mono text-xs">Auth0::getAccessTokenExpiration()</span>, and <span class="font-mono text-xs">Auth0::getRefreshToken()</span> respectively.</p>
                        </div>

                        <div class="px-4 py-5 sm:px-6 grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="id_token" class="block text-sm font-medium text-gray-700">Id Token</label>
                                <input value="<?php echo htmlspecialchars($session->idToken) ?>" type="text" name="id_token" id="id_token" readonly="true" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6">
                                <label for="access_token" class="block text-sm font-medium text-gray-700">Access Token</label>
                                <input value="<?php echo htmlspecialchars($session->accessToken) ?>" type="text" name="access_token" id="access_token" readonly="true" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6">
                                <label for="access_token_scope" class="block text-sm font-medium text-gray-700">Access Token Scope</label>
                                <input value="<?php echo htmlspecialchars(implode(' ', $session->accessTokenScope)) ?>" type="text" name="access_token_scope" id="access_token_scope" readonly="true" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6">
                                <label for="access_token_expires" class="block text-sm font-medium text-gray-700">Access Token Expiration</label>
                                <input value="<?php echo htmlspecialchars(date(DATE_RFC2822, $session->accessTokenExpiration) . ' (' . $session->accessTokenExpiration . ')') ?>" type="text" name="access_token_expires" id="access_token_expires" readonly="true" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6">
                                <label for="refresh_token" class="block text-sm font-medium text-gray-700">Refresh Token</label>
                                <input value="<?php echo htmlspecialchars($session->refreshToken ?? '') ?>" placeholder="Not available" type="text" name="refresh_token" id="refresh_token" readonly="true" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cookies">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Cookies</h3>

                            <?php if (count($cookies)): ?>
                                <p class="mt-1 text-sm text-gray-500">The contents of PHP's $_COOKIE global.</p>
                            <?php endif; ?>
                        </div>

                        <div class="px-4 py-5 sm:px-6 grid grid-cols-6 gap-6">
                            <?php if (count($cookies)): ?>
                                <?php foreach($cookies as $key => $data): ?>
                                    <?php $row = uniqid(); ?>

                                    <?php if(is_string($data)): ?>
                                        <div class="col-span-6">
                                            <label for="<?php echo $row ?>" class="block text-sm font-medium text-gray-700"><?php echo $key ?></label>
                                            <input value="<?php echo htmlspecialchars($data) ?>" type="text" readonly="true" name="<?php echo $row ?>" id="<?php echo $row ?>" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    <?php endif ?>

                                    <?php if(is_array($data)): ?>
                                        <div class="col-span-6">
                                            <label for="<?php echo $row ?>" class="block text-sm font-medium text-gray-700"><?php echo $key ?></label>
                                            <textarea name="<?php echo $row ?>" id="<?php echo $row ?>" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><?php echo htmlspecialchars(print_r($data, true)) ?></textarea>
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php else: ?>
                                <p class="text-sm text-gray-500">Nothing to show.</p>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->stop() ?>
