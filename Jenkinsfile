pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                script {
                    // Change le répertoire de travail à /var/www/nigerdev.com
                    dir('/var/www/nigerdev.com') {
                        // Exécute git pull dans le répertoire spécifié
                        git 'https://github.com/Mounkaila144/nigerdev.git'
                    }
                }
            }
        }
    }
}
