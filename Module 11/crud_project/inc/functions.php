define('DB_NAME','/d/laragon/www/ostad_live/Module 11/crud_project/data/db.txt')

function seed($filename){
    $data = array(
        array(
            'fname' = 'Hasin ',
            'lname' = 'Mia',
            'roll' = 10
        ),
        array(
            'fname' = 'Rabbil ',
            'lname' = 'Mia',
            'roll' = 11
        ),
        array(
            'fname' = 'Faisal ',
            'lname' = 'Mia',
            'roll' = 13
        ),
    );
    $serializedData = serialize($data);
    file_put_contents($filename,$serializedData,LOCK_EX);
}