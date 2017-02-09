pipeline {
    agent any

    stages {
        stage('Install') {
            steps {
                sh 'make install'
            }
        }
        stage('Test') {
            steps {
                parallel(
                    unit: {
                        sh 'make test'
                    },
                    lint: {
                        sh 'make lint'
                    }
                )
            }
        }
        stage('Coverage') {
            steps {
                junit 'reports/coverage/coverage.xml'
            }
        }
        stage('Build') {
            steps {
                sh 'make build'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
