pipeline {
    agent any

    stages {
        stage('Build') {
            parallel(
                message: {
                    echo 'Building...'
                },
                build: {
                    sh 'composer install'
                }
            )
        }
        stage('Test') {
            parallel(
                message: {
                    echo 'Testing...'
                },
                test: {
                    sh 'make test'
                }
            )
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
