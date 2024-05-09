pipeline {
    agent any
    stages {
        stage('Example') {
            steps {
                withCredentials([usernamePassword(credentialsId: 'ID_des_identifiants', usernameVariable: 'USERNAME', passwordVariable: 'PASSWORD')]) {
                    echo 'Now we can use $USERNAME and a secured variable for $PASSWORD'
                }
            }
        }
    }
}
