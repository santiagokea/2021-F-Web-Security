

<?php
require_once('db.php');
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
// prepare statements are not secure
// $q = $_db->prepare("SELECT * FROM users 
//                     WHERE user_email='$user_email' 
//                     AND user_password = '$user_password' ");
$q = $_db->prepare("SELECT * FROM users 
                    WHERE user_email=:user_email 
                    AND user_password = :user_password ");
// to secure the prepare statements use bindValu or bindParam
$q->bindValue(':user_email', $user_email);
$q->bindValue(':user_password', $user_password);
$q->execute();
$rows = $q->fetchAll();
header('Content-Type: application/json');
echo json_encode($rows);



/*
NODEJS example
module.exports = async (req, res) => {
  let conn
  try {
    conn = await pool.getConnection();
    const row = await conn.query("SELECT * FROM users 
                    WHERE user_email=? 
                    AND user_password = ? ", [req.body.user_email, req.body.user_password])  //  $_GET['name']
    return res.json(row[0])
  } catch (err) {
    console.log(err)
    return res.status(400).send()
  } finally {
    if (conn) return conn.end()
  }
}
*/


/*
PYTHON
    db_main.row_factory = sqlite3.Row    
    db_main.execute("ATTACH DATABASE ? AS db_smses", ("data/smses.db",))
    user = db_main.execute("SELECT * FROM users 
                    WHERE user_email=? 
                    AND user_password = ?", (request.forms.get("user_email"), request.forms.get("user_password"))).fetchone()
    if user["user_total_smses_sent_today"] > user["user_max_smses_day"]:
      print("Limit reached")
      response.status = 400
*/





















