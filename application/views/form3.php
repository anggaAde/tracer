<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Kuisioner Tracer Study</title>
<link rel="stylesheet" type="text/css" href="../view.css" media="all">
<script>
function giat()
{
	var val = 0;
	for( i = 0; i < document.alumni2.giatsetuju.length; i++ )
	{
		if( document.alumni2.giatsetuju[i].checked == true )
		{
			val = document.alumni2.giatsetuju[i].value;
			if(val=='9')
			{
				document.alumni2.opsigiat.disabled = false;		
			}
			else
			{
				document.alumni2.opsigiat.disabled = true;
			}
		}
	}
}
function bentuk()
{
	var val = 0;
	for( i = 0; i < document.alumni2.bentukgiat.length; i++ )
	{
		if( document.alumni2.bentukgiat[i].checked == true )
		{
			val = document.alumni2.bentukgiat[i].value;
			if(val=='9')
			{
				document.alumni2.opsibentukgiat.disabled = false;		
			}
			else
			{
				document.alumni2.opsibentukgiat.disabled = true;
			}
		}
	}
}
</script>
</head>
<body id="main_body" >
	<img id="top" src="../top.png" alt="">
	<div id="form_container">
	
		<h1><a>Form Kuisioner Tracer Study</a></h1>
		<?php echo form_open('tracer/insform3'); ?>
			<div class="form_description">
			<h2>Form Kuisioner Tracer Study</h2>
			<p>KETERANGAN : </br>
				1. Kurang Sekali</br>
				2. Kurang</br>
				3. Cukup</br>
				4. Baik</br>
				5. Sangat Baik</br>
			</p>
			</div>
			<div align="center"><b>Bagian III: Masukan dari Alumni Untuk Perbaikan PPNS</b></div></br>
			<table border="1">
				<tr>
					<th rowspan="2" colspan="2" align="center"><b>Jenis Pelayanan</b></th>
					<th colspan="5" align="center">Nilai</th>
				</tr>
				<tr>
					<th align="center">1</th>
					<th align="center">2</th>
					<th align="center">3</th>
					<th align="center">4</th>
					<th align="center">5</th>
				</tr>
				<tr>
					<th>No.</th>
					<th>Menurut anda seberapa besar perhatian prodi terhadap</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<th>1</th>
					<td>Kesempatan berinteraksi dengan dosen-dosen di luar jadual kuliah</td>
					<td><input type="radio" name="inter" value="1"></td>
					<td><input type="radio" name="inter" value="2"></td>
					<td><input type="radio" name="inter" value="3"></td>
					<td><input type="radio" name="inter" value="4"></td>
					<td><input type="radio" name="inter" value="5"></td>
				</tr>
				<tr>
					<th>2</th>
					<td>Pembimbingan akademik</td>
					<td><input type="radio" name="bimbing" value="1"></td>
					<td><input type="radio" name="bimbing" value="2"></td>
					<td><input type="radio" name="bimbing" value="3"></td>
					<td><input type="radio" name="bimbing" value="4"></td>
					<td><input type="radio" name="bimbing" value="5"></td>
				</tr>
				<tr>
					<th>3</th>
					<td>Kesempatan berpartisipasi dalam proyek-proyek riset atau pengabdian masyarakat</td>
					<td><input type="radio" name="proyek" value="1"></td>
					<td><input type="radio" name="proyek" value="2"></td>
					<td><input type="radio" name="proyek" value="3"></td>
					<td><input type="radio" name="proyek" value="4"></td>
					<td><input type="radio" name="proyek" value="5"></td>
				</tr>
				<tr>
					<th>No.</th>
					<th>Bagaimana penilaian anda terhadap kondisi fasilitas pembelajaran dibawah ini</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<th>1</th>
					<td>Perpustakaan</td>
					<td><input type="radio" name="perpus" value="1"></td>
					<td><input type="radio" name="perpus" value="2"></td>
					<td><input type="radio" name="perpus" value="3"></td>
					<td><input type="radio" name="perpus" value="4"></td>
					<td><input type="radio" name="perpus" value="5"></td>
				</tr>
				<tr>
					<th>2</th>
					<td>Teknologi informasi dan komunikasi</td>
					<td><input type="radio" name="ti" value="1"></td>
					<td><input type="radio" name="ti" value="2"></td>
					<td><input type="radio" name="ti" value="3"></td>
					<td><input type="radio" name="ti" value="4"></td>
					<td><input type="radio" name="ti" value="5"></td>
				</tr>
				<tr>
					<th>3</th>
					<td>Modul/bahan ajar</td>
					<td><input type="radio" name="modul" value="1"></td>
					<td><input type="radio" name="modul" value="2"></td>
					<td><input type="radio" name="modul" value="3"></td>
					<td><input type="radio" name="modul" value="4"></td>
					<td><input type="radio" name="modul" value="5"></td>
				</tr>
				<tr>
					<th>4</th>
					<td>Ruang belajar</td>
					<td><input type="radio" name="ruang" value="1"></td>
					<td><input type="radio" name="ruang" value="2"></td>
					<td><input type="radio" name="ruang" value="3"></td>
					<td><input type="radio" name="ruang" value="4"></td>
					<td><input type="radio" name="ruang" value="5"></td>
				</tr>
				<tr>
					<th>5</th>
					<td>Laboratorium</td>
					<td><input type="radio" name="lab" value="1"></td>
					<td><input type="radio" name="lab" value="2"></td>
					<td><input type="radio" name="lab" value="3"></td>
					<td><input type="radio" name="lab" value="4"></td>
					<td><input type="radio" name="lab" value="5"></td>
				</tr>
				<tr>
					<th>6</th>
					<td>Akomodasi/asrama</td>
					<td><input type="radio" name="asrama" value="1"></td>
					<td><input type="radio" name="asrama" value="2"></td>
					<td><input type="radio" name="asrama" value="3"></td>
					<td><input type="radio" name="asrama" value="4"></td>
					<td><input type="radio" name="asrama" value="5"></td>
				</tr>
				<tr>
					<th>7</th>
					<td>Kantin</td>
					<td><input type="radio" name="kantin" value="1"></td>
					<td><input type="radio" name="kantin" value="2"></td>
					<td><input type="radio" name="kantin" value="3"></td>
					<td><input type="radio" name="kantin" value="4"></td>
					<td><input type="radio" name="kantin" value="5"></td>
				</tr>
				<tr>
					<th>8</th>
					<td>Pusat kegiatan mahasiswa dan fasilitasnya</td>
					<td><input type="radio" name="fasil" value="1"></td>
					<td><input type="radio" name="fasil" value="2"></td>
					<td><input type="radio" name="fasil" value="3"></td>
					<td><input type="radio" name="fasil" value="4"></td>
					<td><input type="radio" name="fasil" value="5"></td>
				</tr>
				<tr>
					<th>9</th>
					<td>Fasilitas layanan kesehatan</td>
					<td><input type="radio" name="poli" value="1"></td>
					<td><input type="radio" name="poli" value="2"></td>
					<td><input type="radio" name="poli" value="3"></td>
					<td><input type="radio" name="poli" value="4"></td>
					<td><input type="radio" name="poli" value="5"></td>
				</tr>
				<tr>
					<th>No.</th>
					<th>Bagaimana penilaian anda terhadap pengalaman belajar di bawah ini</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<th>1</th>
					<td>Pembelajaran di kelas</td>
					<td><input type="radio" name="belajar" value="1"></td>
					<td><input type="radio" name="belajar" value="2"></td>
					<td><input type="radio" name="belajar" value="3"></td>
					<td><input type="radio" name="belajar" value="4"></td>
					<td><input type="radio" name="belajar" value="5"></td>
				</tr>
				<tr>
					<th>2</th>
					<td>Pembelajaran di laboratorium</td>
					<td><input type="radio" name="ajarlab" value="1"></td>
					<td><input type="radio" name="ajarlab" value="2"></td>
					<td><input type="radio" name="ajarlab" value="3"></td>
					<td><input type="radio" name="ajarlab" value="4"></td>
					<td><input type="radio" name="ajarlab" value="5"></td>
				</tr>
				<tr>
					<th>3</th>
					<td>Pembelajaran tutorial</td>
					<td><input type="radio" name="tutor" value="1"></td>
					<td><input type="radio" name="tutor" value="2"></td>
					<td><input type="radio" name="tutor" value="3"></td>
					<td><input type="radio" name="tutor" value="4"></td>
					<td><input type="radio" name="tutor" value="5"></td>
				</tr>
				<tr>
					<th>4</th>
					<td>Pembelajaran di lapangan (magang, OJT)</td>
					<td><input type="radio" name="magang" value="1"></td>
					<td><input type="radio" name="magang" value="2"></td>
					<td><input type="radio" name="magang" value="3"></td>
					<td><input type="radio" name="magang" value="4"></td>
					<td><input type="radio" name="magang" value="5"></td>
				</tr>
				<tr>
					<th>5</th>
					<td>Pelaksanaan riset / penulisan tugas akhir</td>
					<td><input type="radio" name="riset" value="1"></td>
					<td><input type="radio" name="riset" value="2"></td>
					<td><input type="radio" name="riset" value="3"></td>
					<td><input type="radio" name="riset" value="4"></td>
					<td><input type="radio" name="riset" value="5"></td>
				</tr>
				<tr>
					<th>6</th>
					<td>Organisasi kemahasiswaan</td>
					<td><input type="radio" name="ukm" value="1"></td>
					<td><input type="radio" name="ukm" value="2"></td>
					<td><input type="radio" name="ukm" value="3"></td>
					<td><input type="radio" name="ukm" value="4"></td>
					<td><input type="radio" name="ukm" value="5"></td>
				</tr>
				<tr>
					<th>7</th>
					<td>Kegiatan ekstrakulikuler</td>
					<td><input type="radio" name="ekstra" value="1"></td>
					<td><input type="radio" name="ekstra" value="2"></td>
					<td><input type="radio" name="ekstra" value="3"></td>
					<td><input type="radio" name="ekstra" value="4"></td>
					<td><input type="radio" name="ekstra" value="5"></td>
				</tr>
				<tr>
					<th>8</th>
					<td>Rekreasi dan olah raga</td>
					<td><input type="radio" name="olah" value="1"></td>
					<td><input type="radio" name="olah" value="2"></td>
					<td><input type="radio" name="olah" value="3"></td>
					<td><input type="radio" name="olah" value="4"></td>
					<td><input type="radio" name="olah" value="5"></td>
				</tr>
				<tr>
					<th>9</th>
					<td>Kegiatan pengabdian masyarakat</td>
					<td><input type="radio" name="abdi" value="1"></td>
					<td><input type="radio" name="abdi" value="2"></td>
					<td><input type="radio" name="abdi" value="3"></td>
					<td><input type="radio" name="abdi" value="4"></td>
					<td><input type="radio" name="abdi" value="5"></td>
				</tr>
			</table></br>

			<li>
				<label class="description" for="kompeten">1. Kompetensi pendukung yang  diperlukan dalam bekerja  (* Boleh dipilih lebih dari satu)</label>
				<span>
					<input name="kompeten1" class="element radio" type="checkbox" value="1"/>
					<label class="choice" >Kemampuan Komunikasi</label>
					<input name="kompeten2" class="element radio" type="checkbox" value="2"/>
					<label class="choice" >Kemampuan komputer</label>
					<input name="kompeten3" class="element radio" type="checkbox" value="3"/>
					<label class="choice" >Kepemimpinan/leadership</label>
					<input name="kompeten" class="element radio" type="checkbox" value="9"/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsikompeten" class="text"/>
				</span> 
			</li>
			2. Kegiatan Alumni
			<li>
				<label class="description" for="giatalumni">2.1 Apakah anda setuju dengan adanya kegiatan alumni?</label>
				<span>
					<input name="giatalumni" class="element radio" type="radio" value="1"/>
					<label class="choice" >Ya</label>
					<input name="giatalumni" class="element radio" type="radio" value="2"/>
					<label class="choice" >Tidak</label>
				</span> 
			</li>
			<li>
				<label class="description" for="giatsetuju">2.2 Jika setuju, frekuensi  kegiatan alumni yang diusulkan adalah?</label>
				<span>
					<input name="giatsetuju" class="element radio" type="radio" value="1" onClick="giat()"/>
					<label class="choice" >6 Bulan Sekali</label>
					<input name="giatsetuju" class="element radio" type="radio" value="2" onClick="giat()"/>
					<label class="choice" >1 Tahun Sekali</label>
					<input name="giatsetuju" class="element radio" type="radio" value="3" onClick="giat()"/>
					<label class="choice" >2 Tahun Sekali</label>
					<input name="giatsetuju" class="element radio" type="radio" value="9" onClick="giat()"/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsigiat" class="text" disabled=""/>
				</span> 
			</li>
			<li>
				<label class="description" for="bentukgiat">2.3 Jika setuju, menurut anda bentuk kegiatan alumni yang diusulkan untuk membina hubungan komunikasi alumni PPNS adalah:</label>
				<span>
					<input name="bentukgiat" class="element radio" type="radio" value="1" onClick="bentuk()"/>
					<label class="choice" >Forum Diskusi</label>
					<input name="bentukgiat" class="element radio" type="radio" value="2" onClick="bentuk()"/>
					<label class="choice" >Family gathering</label>
					<input name="bentukgiat" class="element radio" type="radio" value="9" onClick="bentuk()"/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsibentukgiat" class="text" disabled=""/>
				</span> 
			</li>
			</br>
			3. Saran / Kritik untuk PPNS</br>
			<textarea name="saran" cols="50" rows="10"/></textarea></br>
			<input class="button_text" type="submit" name="selesai" value="selesai" />
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="../bottom.png" alt="">
	</body>
</html>