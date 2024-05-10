pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                script {
                    dir('/var/www/nigerdev.com') {
                        checkout([$class: 'GitSCM', branches: [[name: '*/master']],
                                  userRemoteConfigs: [[url: 'https://github.com/Mounkaila144/nigerdev.git']]
                        ])
                    }
                }
            }
        }
        stage('Deploy') {
            steps {
                script {
                    dir('/var/www/nigerdev.com') {
                        // Rétablir les permissions avant de déployer
                        sh 'sudo chown -R ubuntu:ubuntu .'
                        sh 'sudo find . -type d -exec chmod 775 {} \\;'
                        sh 'sudo find . -type f -exec chmod 664 {} \\;'

                        // Continuer le déploiement
                        sh 'git pull'
                        sh 'composer install --no-dev --optimize-autoloader'
                        sh 'php artisan migrate --force'
                        // Autres commandes de déploiement si nécessaire
                    }
                }
            }
        }
    }
}
