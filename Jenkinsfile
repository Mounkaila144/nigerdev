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
        stage('Install Dependencies') {
            steps {
                dir('/var/www/nigerdev.com') {
                    sh 'composer install'
                }
            }
        }
        stage('Test') {
            steps {
                dir('/var/www/nigerdev.com') {
                    sh 'vendor/bin/phpunit'
                }
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
