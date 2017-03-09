<?
include("config.php");

function admingircek( )
{
    if ( $_POST['admingircek'] )
    {
        ob_start( );
        $admpass = $_POST['admpass'];
        if ( $admpass == "" )
        {
            echo "<script type='text/javascript'>alert('Admin Paneli Sql* kapalýdýr.');</script>";
        }
        else
        {
            $sor = mysql_query( "select * from admingir where admpass='{$admpass}'" );
            $bul = mysql_num_rows( $sor );
            if ( $bul == "0" )
            {
                echo "<script type=\"text/javascript\">alert(\"Uyelik bulunamadi..\");</script>";
            }
            else
            {
                $sor = mysql_query( "select * from admingir where admpass='{$admpass}'" );
                while ( $ok = mysql_fetch_array( $sor ) )
                {
                    setcookie( "admpass", "{$admpass}", time( ) + 100 * 300 );
                }
                header( "location:index.php" );
            }
        }
        ob_end_flush( );
    }
}

?>