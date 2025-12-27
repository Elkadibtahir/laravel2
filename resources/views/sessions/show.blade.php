<dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Module</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->module->nom ?? 'N/A' }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Teacher</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->teacher->nom ?? 'N/A' }} {{ $session->teacher->prenom ?? '' }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Date</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->date_session }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Start Time</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->heure_debut }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">End Time</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->heure_fin }}</dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Salle</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->salle }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Class</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->classe->nom_classe ?? 'N/A' }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Module</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->module->nom ?? 'N/A' }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Teacher</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->teacher->nom ?? 'N/A' }} {{ $session->teacher->prenom ?? '' }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Date</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->date_session }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Start Time</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->heure_debut }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">End Time</dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $session->heure_fin }}</dd>
                </div>
