<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project Web HTML5</title> <!-- Judul pada Tab -->
        <link rel="icon" href="images/favicon.png">
    </head>
    
    <!-- CCS Dasar untuk memberi garis pada table -->
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
     </style>
     
     <body >
<!-- header biasanya digunakan untuk menu -->
        <header style="text-align:center;">
            <header>
                    <h2><u>DAFTAR RIWAYAT HIDUP</u></h2> <!-- <img  untuk insert gambar -->
                    <img src="images/gambar.png"width="200" height="200"> 
                    <p style="font-family:verdana;font-size: 200%;"> ==> Shofiyullah AL Ghozaly <== </p>
            </header> <!-- width dan height untuk mengatur ukuran gambar -->  
            <h6 style="background-color:DodgerBlue;">.</h6>  
        </header>
        
<!-- Section biasanya digunakan untuk artikel atau contain -->       
        <section>
            <article style="text-align:center;">
                <header>
                    <h2 style="font-family:courier;" >Data Identitas</h2> <!-- <h1> sampai <h6> untuk judul -->
                     <!-- li berfungsi list item -->
                    <p> Lumajang, 17 February 1996</p>
                    <p> Lumajang - Jawa Timur - Indonesia</p>
                    <p> <a href="#">shofiyullah.al.ghozaly@student.uty.ac.id</a></p>
                    <!-- <a berfungsi memberi link/alamat--> 
                    <h6 style="background-color:DodgerBlue;">.</h6>  
                </header>
            </article>
            
            <article>
                <header style="text-align:center;">
                    <h2 style="font-family:courier;" >Riwayat Pendidikan</h2>
                   <table style="width:50%" align="center"">
                    <tr> <!-- <tr> Untuk baris -->
                      <th>Strata </th> 
                      <th>Nama Sekolah</th> 
                      <th>Tahun Lulus</th> <!-- <th> Untuk judul tabel -->
                    </tr>
                    <tr>
                      <td>SD/MI</td> <!-- <td> Untuk kolom/isi tabel -->
                      <td>MI Nurul Islam</td> 
                      <td>2003-2009</td>
                    </tr>
                    <tr>
                      <td>SMP</td>
                      <td>SMP Al Maliki</td> 
                      <td>2009-2012</td>
                    </tr>
                    <tr>
                      <td>SMK</td>
                      <td>SMK Mulia</td> 
                      <td>2012-2015</td>
                    </tr>
                  </table>
                </header> <!-- width dan height untuk mengatur ukuran gambar -->
                <h6 style="background-color:DodgerBlue;">.</h6>
            </article>
        </section>

<!-- aside biasanya digunakan untuk menaruh contain iklan -->
        <aside style="text-align:center;">
            <h5 >“Beberapa jalan yang indah tidak dapat ditemukan tanpa tersesat terlebih dahulu.”</h5>
        </aside>

<!-- footer biasanya digunakan untuk copyright paling bawah -->
        <footer style="text-align:center;">
            <p>&COPY; AL Gzl | 5150411119 </p>
        </footer>
    </body>
</html>
