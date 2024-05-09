pipeline {
    agent any
    stages {
        stage('Pull Latest') {
            steps {
                dir('/var/www/nigerdev.com') {
                    script {
                        // Assure que le dépôt est propre avant de tirer
                        sh 'git reset --hard'
                        sh 'git clean -fd'
                        sh 'git pull'
                    }
                }
            }
        }


    }
}
