pipeline {
    agent any
    stages {
        stage('Pull Latest') {
            steps {
                dir('/var/www/nigerdev.com') {
                    script {
                        sh 'git pull'
                    }
                }
            }
        }


    }
}
