<?php 

    include "db_conn.php";
    echo "<pre>";
	print_r($_FILES['pdf_file']);
	echo "</pre>";
	$title = $_POST['title'];
	$title = ucwords ($title);
	$chord = $_POST['chord'];
	$number = $_POST['number'];
	$lyrics = $_POST['lyrics'];
	
	$pdf_file = $_FILES['pdf_file']['name'];
	$pdf_size = $_FILES['pdf_file']['size'];
	$pdf_tmp_name = $_FILES['pdf_file']['tmp_name'];
	$error = $_FILES['pdf_file']['error'];
	
	$pptx_file = $_FILES['pptx_file']['name'];
	$pptx_size = $_FILES['pptx_file']['size'];
	$pptx_tmp_name = $_FILES['pptx_file']['tmp_name'];
	$error = $_FILES['pptx_file']['error'];
	
	$pro_file = $_FILES['pro_file']['name'];
	$pro_size = $_FILES['pro_file']['size'];
	$pro_tmp_name = $_FILES['pro_file']['tmp_name'];
	$error = $_FILES['pro_file']['error'];

	if ($error === 0) {
		if ($pro_size > 5250000) {
			$em = "Sorry, your file is too large.";
		    
		}else {
			$pdf_ex = pathinfo($pdf_file, PATHINFO_EXTENSION);
			$pdf_ex_lc = strtolower($pdf_ex);
			
            $pptx_ex = pathinfo($pptx_file, PATHINFO_EXTENSION);
			$pptx_ex_lc = strtolower($pptx_ex);
			
			$pro_ex = pathinfo($pro_file, PATHINFO_EXTENSION);
			$pro_ex_lc = strtolower($pro_ex);
			
			$allowed_exs = array("pdf","pptx","pro"); 

			if (in_array($pdf_ex_lc, $allowed_exs) && in_array($pptx_ex_lc, $allowed_exs) && in_array($pro_ex_lc, $allowed_exs)) {
				$new_pdf_name = uniqid("PDF-", true).'.'.$pdf_ex_lc;
				$pdf_upload_path = 'uploads/'.$new_pdf_name;
				move_uploaded_file($pdf_tmp_name, $pdf_upload_path);
				
				$new_pptx_name = uniqid("PPTX-", true).'.'.$pptx_ex_lc;
				$pptx_upload_path = 'uploads/'.$new_pptx_name;
				move_uploaded_file($pptx_tmp_name, $pptx_upload_path);
				
				$new_pro_name = uniqid("PRO-", true).'.'.$pro_ex_lc;
				$pro_upload_path = 'uploads/'.$new_pro_name;
				move_uploaded_file($pro_tmp_name, $pro_upload_path);

                // Insert into Database
                $sql = "INSERT INTO song (pdf, ppt, pro, title, chord, lyrics, number) 
            	VALUES ('$new_pdf_name','$new_pptx_name','$new_pro_name','$title','$chord','$lyrics','$number')";            	
            	mysqli_query($conn, $sql);
				
			$em = "unknown error occurred!";
			}else {
				$em = "You can't upload files of this type";
			}
		}
	}else {
		  echo "Error: " . $sql . "<br>" . $conn->error;

	}

