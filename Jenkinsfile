pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git credentialsId: 'git_credentials', url: 'https://github.com/Mounkaila144/nigerdev.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }
        stage('Test') {
            steps {
                sh 'vendor/bin/phpunit'
            }
        }
        stage('Deploy to Production') {
            steps {
                sshPublisher(
                    publishers: [
                        sshPublisherDesc(
                            configName: 'server_ssh_key',
                            transfers: [
                                sshTransfer(
                                    sourceFiles: '**/*',
                                    removePrefix: 'src',
                                    remoteDirectory: '/var/www/nigerdev.com',
                                    execCommand: '''
                                        cd /var/www/nigerdev.com &&
                                        php artisan migrate --force &&
                                        php artisan optimize
                                    '''
                                )
                            ]
                        )
                    ]
                )
            }
        }
    }
}
