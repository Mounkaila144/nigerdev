pipeline {
    agent any

    environment {
        // Définir le répertoire racine de votre projet Laravel
        DOC_ROOT = "/var/www/nigerdev.com"
    }

    stages {
        stage('Pull Latest Code') {
            steps {
                script {
                    dir("${env.DOC_ROOT}") {
                        // Effectuer un git pull pour mettre à jour le code
                        echo 'Pulling latest code from Git repository...'
                        checkout scm
                    }
                }
            }
        }

        stage('Set Correct Permissions') {
            steps {
                script {
                    dir("${env.DOC_ROOT}") {
                        // Réajuster les permissions après le pull pour éviter les problèmes d'accès
                        echo 'Setting correct file permissions...'
                        sh '''
                        sudo chown -R ubuntu:ubuntu .
                        sudo find . -type d -exec chmod 775 {} \\;
                        sudo find . -type f -exec chmod 664 {} \\;
                        sudo chmod -R 777 storage
                        sudo chmod -R 777 bootstrap/cache
                        '''
                    }
                }
            }
        }

        stage('Restart PHP and Web Server') {
            steps {
                script {
                    // Redémarrer PHP-FPM et le serveur web pour appliquer les changements
                    echo 'Restarting PHP and Web server...'
                    sh 'sudo systemctl restart php8.3-fpm'  // Ajustez selon votre version de PHP
                    sh 'sudo systemctl restart nginx'      // Remplacez par apache2 si vous utilisez Apache
                }
            }
        }
    }

    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed!'
        }
        always {
            echo 'Deployment process completed.'
        }
    }
}

