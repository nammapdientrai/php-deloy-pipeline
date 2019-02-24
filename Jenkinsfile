pipeline {
    agent any

    stages {
        stage ('Check container JDK') {
            steps {
                if !["$(docker ps -q -f name=java-jdk)"]; then
                    if ["$(docker ps -aq -f status=exited -f name=java-jdk)"]; then
                        sh 'docker rm java-jdk'
                    fi
                    
                    sh 'docker run -d -v /opt/tomcat/.jenkins/workspace/jog-test-pipeline-java/demojenkinsTest/target:/home -i openjdk';
                fi
            }
        }

        stage ('2') {
            steps {
                echo '2 ....'
            }
        }

        stage ('3') {
            steps {
                echo '3 ....'
            }
        }
    }
}
