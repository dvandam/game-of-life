pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Building...'
            }
        }
        parallel {
            stage('Test') {
                steps {
                    echo 'Testing...'
                }
                steps {
                    make test
                }
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
