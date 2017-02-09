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
                step([
                    $class: 'CloverPublisher',
                    cloverReportDir: 'reports/coverage',
                    cloverReportFileName: 'coverage.xml',
                    healthyTarget: [methodCoverage: 70, conditionalCoverage: 80, statementCoverage: 80], // optional, default is: method=70, conditional=80, statement=80
                    unhealthyTarget: [methodCoverage: 50, conditionalCoverage: 50, statementCoverage: 50], // optional, default is none
                    failingTarget: [methodCoverage: 0, conditionalCoverage: 0, statementCoverage: 0]     // optional, default is none
                ])
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
