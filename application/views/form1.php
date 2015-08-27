<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Kuisioner Tracer Study</title>
<link rel="stylesheet" type="text/css" href="../view.css" media="all">
<script type="text/javascript" src="../view.js"></script>
</head>
<body id="main_body" >
	<img id="top" src="../top.png" alt="">
	<div id="form_container">
	
		<h1><a>Form Kuisioner Tracer Study</a></h1>
		<?php echo validation_errors(); ?>
		<?php echo form_open('tracer'); ?>
			<div class="form_description">
			<h2>Form Kuisioner Tracer Study</h2>
			<p>Yth. Alumni PPNS, Mohon partisipasinya untuk mengisi Tracer Study ini. Selain untuk terus menjalin komunikasi antara PPNS dengan alumni, Tracer Study ini juga bertujuan untuk memperoleh masukan dari alumni dan relasi guna terus memperbaiki kualitas PPNS.</p>
			</div>
			<div align="center"><b>Bagian I : DATA ALUMNI</b></div>
			<ul >
				<li id="li_1" >
					<label class="description" for="nama">1. Nama Lengkap  </label>
					<div>
						<input name="nama" class="element text medium" type="text" maxlength="255"/> 
					</div>	 
				</li>
				<li>
					<label class="description">2. Jenis Kelamin </label>
					<div>
						<select class="element select medium" name="gender"> 
							<option value="" selected="selected"></option>
							<option value="L" >Laki-laki</option>
							<option value="P" >Perempuan</option>
						</select>
					</div> 
				</li>
				<li id="li_1" >
					<label class="description" for="angkatan">3. Angkatan (tahun)  </label>
					<div>
						<select class="element select medium" id="bekerja" name="angkatan"> 
							<option value="" selected="selected"></option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
						</select> 
					</div>	 
				</li>
				<li id="li_1" >
					<label class="description" for="prodi">4. program Studi</label>
					<div>
						<select class="element select medium" id="bekerja" name="prodi"> 
							<option value="" selected="selected"></option>
							<option value="K3" >D4 Teknik Keselamatan dan Kesehatan Kerja</option>
							<option value="DM" >D4 Teknik Desain dan Manufaktur</option>
							<option value="SB" >D3 Teknik Bangunan Kapal</option>
							<option value="DC" >D3 Teknik Desain dan Konstruksi Kapal</option>
							<option value="TL" >D4 Teknik Pengelasan</option>
							<option value="TP" >D4 Teknik Perpipaan</option>
							<option value="ME" >D3 Teknik Permesinan Kapal</option>
							<option value="TO" >D4 Teknik Otomasi</option>
							<option value="PE" >D3 Teknik Kelistrikan Kapal</option>
						</select>
					</div>	 
				</li>
				<li id="li_1" >
					<label class="description" for="lulus">5. Lulus dari PPNS (tahun)</label>
					<div>
						<select class="element select medium" id="bekerja" name="lulus"> 
							<option value="" selected="selected"></option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
						</select>
					</div>	 
				</li>
				<li id="li_1" >
					<label class="description" for="alamat">6. Alamat Rumah</label>
					<div>
						<input name="alamat" class="element text medium" type="text" maxlength="255" value=""/> 
					</div>	 
				</li>
				<li id="li_1" >
					<label class="description" for="telp">7. Telp/HP</label>
					<div>
						<input name="telp" class="element text medium" type="text" maxlength="255" value=""/> 
					</div>	 
				</li>
				<li id="li_1" >
					<label class="description" for="email">8. Email</label>
					<div>
						<input name="email" class="element text medium" type="text" maxlength="255" value=""/> 
					</div>	 
				</li>
				<li id="li_2" >
					<label class="description" for="bekerja">9. Apakah saat ini anda bekerja / pernah bekerja sebelumnya?  </label>
					<div>
						<select class="element select medium" id="bekerja" name="bekerja"> 
							<option value="" selected="selected"></option>
							<option value="1" >Ya</option>
							<option value="2" >Tidak</option>
						</select>
					</div> 
				</li>
				<li id="li_1" >
					<label class="description" for="kantor">10. Tempat Bekerja Pertama Kali (Nama Perusahaan)</label>
					<div>
						<input name="kantor" class="element text medium" type="text" maxlength="255" value=""/> 
					</div>	 
				</li>
				<li id="li_1" >
					<label class="description" for="alamatkantor">11. Alamat Perusahaan (KOTA)</label>
					<div>
						<input name="alamatkantor" class="element text medium" type="text" maxlength="255" value=""/> 
					</div>	 
				</li>
				Pertanyaan no. 10-11 diisi apabila anda telah berpindah tempat bekerja
				<li id="li_1" >
					<label class="description" for="kantor2">12. Tempat Bekerja Sekarang (Nama Perusahaan)</label>
					<div>
						<input name="kantor2" class="element text medium" type="text" maxlength="255" value=""/> 
					</div>	 
				</li>
				<li id="li_1" >
					<label class="description" for="alamatkantor2">13. Alamat Perusahaan (plus KOTA dan No. Telpon)</label>
					<div>
						<input name="alamatkantor2" class="element text medium" type="text" maxlength="255" value=""/> 
					</div>	 
				</li>
				<li class="buttons">
					<input type="hidden" name="form_id" value="666107" />
					<input class="button_text" type="submit" name="selanjutnya" value="selanjutnya" />
				</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="../bottom.png" alt="">
	</body>
</html>