pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh 'make install'
            }
        }
        stage('Test') {
            steps {
                parallel(
                    test: {
                        sh 'make test'
                    },
                    lint: {
                        sh 'make lint'
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
