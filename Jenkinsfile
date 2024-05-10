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
        stage('Deploy') {
            steps {
                script {
                    dir('/var/www/nigerdev.com') {
                        sh 'git pull'
                        sh 'composer install --no-dev --optimize-autoloader'
                        // Ajoutez d'autres commandes nécessaires pour le déploiement
                    }
                }
            }
        }
    }
}
