pipeline {
    agent any

    stages {
        stage ('Setup container MySQL') {
            steps {
                echo 'Setup container MySQL .....'        
            }
        }

        stage ('Setup container Apache') {
            steps {
                echo 'Setup container Apache .....'        
            }
        }

        stage ('Setup container PHP') {
            steps {
                echo 'Setup container PHP .....'        
            }
        }

        stage ('Move code to volume container') {
            steps {
                sh 'docker container stop php-php5'
                sh 'docker container rm php-php5'
                sh 'docker run -d --name php-php5 -v /opt/tomcat/.jenkins/workspace/php-deloy-pipeline/:/var/www/html/ -i nimmis/apache-php5'     
            }
        }

        stage ('Test') {
            steps {
                echo 'Test .....'        
            }
        }

        stage ('Deloy') {
            steps {
                echo 'Deloy .....'
            }
        }

        stage ('Succes') {
            steps {
                echo 'Success .....'
            }
        }
    }
}
