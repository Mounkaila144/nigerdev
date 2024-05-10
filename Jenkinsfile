pipeline {
    agent any

    environment {
        // Le répertoire de base de votre application Laravel
        DOC_ROOT = "/var/www/nigerdev.com"
    }

    stages {
        stage('Quick Pull & Deploy') {
            steps {
                script {
                    dir("${env.DOC_ROOT}") {
                        // Affiche l'heure de début pour le débogage
                        echo "Starting deployment at ${new Date()}"

                        // Pull les dernières modifications du code source
                        echo 'Pulling latest code from Git repository...'
                        checkout scm

                        // Correction rapide des permissions pour éviter les problèmes d'accès
                        echo 'Applying minimal necessary permissions...'
                        sh 'sudo chown -R ubuntu:ubuntu .'
                        sh 'sudo chmod -R 775 storage bootstrap/cache'

                        // Redémarrer PHP-FPM pour appliquer les modifications de code
                        echo 'Restarting PHP to reload the changes...'
                        sh 'sudo systemctl restart php8.3-fpm' // Ajustez selon votre version de PHP

                        // Affiche l'heure de fin pour le débogage
                        echo "Deployment finished at ${new Date()}"
                    }
                }
            }
        }
    }

    post {
        success {
            echo 'Deployment completed successfully!'
        }
        failure {
            echo 'Deployment failed. Check console output for details.'
        }
        always {
            echo 'Deployment process has completed.'
        }
    }
}
