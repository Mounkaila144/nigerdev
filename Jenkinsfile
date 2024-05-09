pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                script {
                    dir('/var/www/nigerdev.com') {
                        sh 'git pull'
                    }
                }
            }
        }
    }
}
