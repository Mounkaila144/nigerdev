pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                script {
                    dir('/var/www/nigerdev.com') {
                        checkout scm
                    }
                }
            }
        }

        stage('Set Permissions') {
            steps {
                script {
                    dir('/var/www/nigerdev.com') {
                        sh '''
                        sudo chown -R ubuntu:ubuntu .
                        sudo find . -type d -exec chmod 775 {} +
                        sudo find . -type f -exec chmod 664 {} +
                        sudo chmod -R 777 storage
                        sudo chmod -R 777 bootstrap/cache
                        '''
                    }
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    dir('/var/www/nigerdev.com') {
                        sh 'git pull origin master'
                        sh 'composer install --no-dev --optimize-autoloader'
                        sh 'php artisan migrate --force'
                        sh 'php artisan config:cache'
                        sh 'php artisan route:cache'
                        sh 'php artisan view:clear'
                        sh 'php artisan cache:clear'
                    }
                }
            }
        }
    }
}
