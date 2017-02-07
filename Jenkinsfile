pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                parallel(
                    message: {
                        echo 'Building...'
                    },
                    build: {
                        sh 'composer install'
                    }
                )
            }
        }
        stage('Test') {
            steps {
                parallel(
                    message: {
                        echo 'Testing...'
                    },
                    test: {
                        sh 'make test'
                    }
                )
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
