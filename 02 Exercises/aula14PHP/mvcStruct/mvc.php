<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
     class Depart {
        private $id;
        private $depart;

        public Depart($id, $depart) {
          self->$id = $id;
          self->$depart = $depart;
        };

        public getId(){
          return self->$id;
        }

        public setId($id){
          self->$id = $id;
        }

        public function remove(){pass;} 
        public function update(){pass;} 
        public function save(){pass;} 
        public function listAll(){pass;} 
     }
  ?>
</body>
</html>