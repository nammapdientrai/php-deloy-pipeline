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

        stage ('Test') {
            steps {
                sh 'cd /opt/tomcat/.jenkins/workspace/php-deloy-pipeline | ./vendor/bin/phpunit'       
            }
        }

        stage ('Deloy') {
            steps {
                sh 'docker container stop php-php5'
                sh 'docker container rm php-php5'
                sh 'docker run -d --name php-php5 -v /opt/tomcat/.jenkins/workspace/php-deloy-pipeline/:/var/www/html/ -i nimmis/apache-php5'
                sh 'docker exec php-php5 chmod 777 /var/www/html/. -R'     
            }
        }

        stage ('Feed back - Monitoring - Operate') {
            steps {
                echo 'Feed back - Monitoring - Operate .....'
            }
        }

        stage ('Succes') {
            steps {
                echo 'Success .....'
            }
        }
    }
}
