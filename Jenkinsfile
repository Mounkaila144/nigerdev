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
                        // Spécifier la branche lors du pull
                        sh 'git pull origin master'
                        sh 'composer install --no-dev --optimize-autoloader'
                        // Autres commandes de déploiement si nécessaire
                    }
                }
            }
        }
    }
}
