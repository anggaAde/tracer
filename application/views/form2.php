<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Kuisioner Tracer Study</title>
<link rel="stylesheet" type="text/css" href="../view.css" media="all">
<script type='text/javascript'>
function jabatanmu()
{
	var val = 0;
	for( i = 0; i < document.alumni2.jabatan.length; i++ )
	{
		if( document.alumni2.jabatan[i].checked == true )
		{
			val = document.alumni2.jabatan[i].value;
			if(val=='9')
			{
				document.alumni2.opsijabatan.disabled = false;		
			}
			else
			{
				document.alumni2.opsijabatan.disabled = true;
			}
		}
	}
}
function bidangmu()
{
	var val = 0;
	for( i = 0; i < document.alumni2.bidang.length; i++ )
	{
		if( document.alumni2.bidang[i].checked == true )
		{
			val = document.alumni2.bidang[i].value;
			if(val=='21')
			{
				document.alumni2.opsibidang.disabled = false;		
			}
			else
			{
				document.alumni2.opsibidang.disabled = true;
			}
		}
	}
}
function wirausahamu()
{
	var val = 0;
	for( i = 0; i < document.alumni2.wirausaha.length; i++ )
	{
		if( document.alumni2.wirausaha[i].checked == true )
		{
			val = document.alumni2.wirausaha[i].value;
			if(val=='wirausaha')
			{
				//document.alumni2.opsiwirausaha11.disabled = false;
				var radio=document.getElementsByName("opsiwirausaha1");
				var len=radio.length;
				for(var i=0;i<len;i++)
				{
				    radio[i].disabled=false;
				}		
			}
			else
			{
				//document.alumni2.opsiwirausaha11.disabled = true;
				var radio=document.getElementsByName("opsiwirausaha1");
				var len=radio.length;
				for(var i=0;i<len;i++)
				{
				    radio[i].disabled=true;
				}	
			}
		}
	}
}
function usahamu()
{
	var val = 0;
	for( i = 0; i < document.alumni2.opsiwirausaha1.length; i++ )
	{
		if( document.alumni2.opsiwirausaha1[i].checked == true )
		{
			val = document.alumni2.opsiwirausaha1[i].value;
			if(val=='21')
			{
				document.alumni2.opsiwirausaha.disabled = false;		
			}
			else
			{
				document.alumni2.opsiwirausaha.disabled = true;
			}
		}
	}
}
function gajimu()
{
	var val = 0;
	for( i = 0; i < document.alumni2.gaji.length; i++ )
	{
		if( document.alumni2.gaji[i].checked == true )
		{
			val = document.alumni2.gaji[i].value;
			if(val=='7')
			{
				document.alumni2.opsigaji.disabled = false;		
			}
			else
			{
				document.alumni2.opsigaji.disabled = true;
			}
		}
	}
}
function statusmu()
{
	var val = 0;
	for( i = 0; i < document.alumni2.status.length; i++ )
	{
		if( document.alumni2.status[i].checked == true )
		{
			val = document.alumni2.status[i].value;
			if(val=='10')
			{
				document.alumni2.opsistatus.disabled = false;
				document.alumni2.opsistatus2.disabled = false;		
			}
			else
			{
				document.alumni2.opsistatus.disabled = true;
				document.alumni2.opsistatus2.disabled = true;
			}
		}
	}
}
function prosesmu()
{
	var val = 0;
	for( i = 0; i < document.alumni2.proses.length; i++ )
	{
		if( document.alumni2.proses[i].checked == true )
		{
			val = document.alumni2.proses[i].value;
			if(val=='6')
			{
				document.alumni2.opsiproses.disabled = false;	
			}
			else
			{
				document.alumni2.opsiproses.disabled = true;
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
		<?php echo form_open('tracer/insform2'); ?>
			<div class="form_description">
			<h2>Form Kuisioner Tracer Study</h2>
			<p></p>
			</div>
			<div align="center"><b>Bagian II: Kuisioner untuk Alumni</b></br>jika saat ini anda bekerja atau sedang bekerja maka..</div>
			<ul >
				<li id="li_1" >
				<label class="description" for="jabatan">1. Apa jabatan/jenjang pekerjaan anda? </label>
				<span>
					<input name="jabatan" class="element radio" type="radio" value="1" onClick="jabatanmu()" />
					<label class="choice" >Pemilik</label>
					<input name="jabatan" class="element radio" type="radio" value="2" onClick="jabatanmu()"/>
					<label class="choice" >Komisaris</label>
					<input name="jabatan" class="element radio" type="radio" value="3" onClick="jabatanmu()"/>
					<label class="choice" >Direksi</label>
					<input name="jabatan" class="element radio" type="radio" value="4" onClick="jabatanmu()"/>
					<label class="choice" >General Manager</label>
					<input name="jabatan" class="element radio" type="radio" value="5" onClick="jabatanmu()"/>
					<label class="choice" >Manager</label>
					<input name="jabatan" class="element radio" type="radio" value="6" onClick="jabatanmu()"/>
					<label class="choice" >Supervisor</label>
					<input name="jabatan" class="element radio" type="radio" value="7" onClick="jabatanmu()"/>
					<label class="choice" >Staf Ahli</label>
					<input name="jabatan" class="element radio" type="radio" value="8" onClick="jabatanmu()"/>
					<label class="choice" >Staf</label>
					<input name="jabatan" class="element radio" type="radio" value="9" onClick="jabatanmu()"/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsijabatan" class="text" />
				</span> 
				</li>

				<li id="li_3" >
				<label class="description" for="bidang">2. Anda bekerja di bidang apa? </label>
				<span>
					<input name="bidang" class="element radio" type="radio" value="1" onClick="bidangmu()" />
					<label class="choice" >Perkapalan dan maritim</label>
					<input name="bidang" class="element radio" type="radio" value="2" onClick="bidangmu()"/>
					<label class="choice" >Pertanian</label>
					<input name="bidang" class="element radio" type="radio" value="3" onClick="bidangmu()"/>
					<label class="choice" >Pertambangan</label>
					<input name="bidang" class="element radio" type="radio" value="4" onClick="bidangmu()"/>
					<label class="choice" >Industri Pengolahan</label>
					<input name="bidang" class="element radio" type="radio" value="5" onClick="bidangmu()"/>
					<label class="choice" >Kelistrikan, gas, uap, Pengkondisian udara</label>
					<input name="bidang" class="element radio" type="radio" value="6" onClick="bidangmu()"/>
					<label class="choice" >Air, daur ulang, limbah</label>
					<input name="bidang" class="element radio" type="radio" value="7" onClick="bidangmu()"/>
					<label class="choice" >Konstruksi</label>
					<input name="bidang" class="element radio" type="radio" value="8" onClick="bidangmu()"/>
					<label class="choice" >Perdagangan</label>
					<input name="bidang" class="element radio" type="radio" value="9" onClick="bidangmu()"/>
					<label class="choice" >Informasi dan Komunikasi</label>
					<input name="bidang" class="element radio" type="radio" value="10" onClick="bidangmu()"/>
					<label class="choice" >Keuangan dan Asuransi</label>
					<input name="bidang" class="element radio" type="radio" value="11" onClick="bidangmu()"/>
					<label class="choice" >Real Estate</label>
					<input name="bidang" class="element radio" type="radio" value="12" onClick="bidangmu()"/>
					<label class="choice" >Jasa profesi, ilmiah dan teknis</label>
					<input name="bidang" class="element radio" type="radio" value="13" onClick="bidangmu()"/>
					<label class="choice" >Jasa Persewaan</label>
					<input name="bidang" class="element radio" type="radio" value="14" onClick="bidangmu()"/>
					<label class="choice" >Administrasi Pemerintahan</label>
					<input name="bidang" class="element radio" type="radio" value="15" onClick="bidangmu()"/>
					<label class="choice" >Pendidikan</label>
					<input name="bidang" class="element radio" type="radio" value="16" onClick="bidangmu()"/>
					<label class="choice" >Transportasi dan Pergudangan</label>
					<input name="bidang" class="element radio" type="radio" value="17" onClick="bidangmu()"/>
					<label class="choice" >Akomodasi, makanan dan minuman</label>
					<input name="bidang" class="element radio" type="radio" value="18" onClick="bidangmu()"/>
					<label class="choice" >Kesehatan dan social</label>
					<input name="bidang" class="element radio" type="radio" value="19" onClick="bidangmu()"/>
					<label class="choice" >Kesenian, hiburan dan rekreasi</label>
					<input name="bidang" class="element radio" type="radio" value="20" onClick="bidangmu()"/>
					<label class="choice" >Badan Internasional</label>
					<input name="bidang" class="element radio" type="radio" value="21" onClick="bidangmu()"/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsibidang" class="text" disabled="" />
				</span> 
				</li>

				<li>
				<label class="description" for="wirausaha">3. apakah anda memiliki wirausaha? </label>
				<span>
					<input name="wirausaha" class="element radio" type="radio" value="wirausaha" onClick="wirausahamu()"/>
					<label class="choice" >Ya</label>
					<input name="wirausaha" class="element radio" type="radio" value="tidak wirausaha" onClick="wirausahamu()"/>
					<label class="choice" >Tidak</label>
				</span> 
				</li>

				<li>
				<label class="description" for="opsiwirausaha1">4. Anda berwirausaha di bidang apa? </label>
				<span>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="perkapalan dan maritim" onClick="usahamu()" disabled=""/>
					<label class="choice" >Perkapalan dan maritim</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="pertanian" onClick="usahamu()" disabled=""/>
					<label class="choice" >Pertanian</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="pertambangan" onClick="usahamu()" disabled=""/>
					<label class="choice" >Pertambangan</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="industri pengolahan" onClick="usahamu()" disabled=""/>
					<label class="choice" >Industri Pengolahan</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="kelistrikan_gas_uap_pengkondisian udara" onClick="usahamu()" disabled=""/>
					<label class="choice" >Kelistrikan, gas, uap, Pengkondisian udara</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="air_daurulang_limbah" onClick="usahamu()" disabled=""/>
					<label class="choice" >Air, daur ulang, limbah</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="konstruksi" onClick="usahamu()" disabled=""/>
					<label class="choice" >Konstruksi</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="perdagangan" onClick="usahamu()" disabled=""/>
					<label class="choice" >Perdagangan</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="informasi dan komunikasi" onClick="usahamu()" disabled=""/>
					<label class="choice" >Informasi dan Komunikasi</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="keuangan dan suransi" onClick="usahamu()" disabled=""/>
					<label class="choice" >Keuangan dan Asuransi</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="realestate" onClick="usahamu()" disabled=""/>
					<label class="choice" >Real Estate</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="jasa profesi ilmiah dan teknis" onClick="usahamu()" disabled=""/>
					<label class="choice" >Jasa profesi, ilmiah dan teknis</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="jasa persewaan" onClick="usahamu()" disabled=""/>
					<label class="choice" >Jasa Persewaan</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="administrasi pemerintahan" onClick="usahamu()" disabled=""/>
					<label class="choice" >Administrasi Pemerintahan</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="pendidikan" onClick="usahamu()" disabled=""/>
					<label class="choice" >Pendidikan</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="transportasi dan pergudangan" onClick="usahamu()" disabled=""/>
					<label class="choice" >Transportasi dan Pergudangan</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="akomodasi makanan dan minuman" onClick="usahamu()" disabled=""/>
					<label class="choice" >Akomodasi, makanan dan minuman</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="kesehatan dan sosial" onClick="usahamu()" disabled=""/>
					<label class="choice" >Kesehatan dan social</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="kesenian hiburan rekreasi" onClick="usahamu()" disabled=""/>
					<label class="choice" >Kesenian, hiburan dan rekreasi</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="badan internasional" onClick="usahamu()" disabled=""/>
					<label class="choice" >Badan Internasional</label>
					<input name="opsiwirausaha1" class="element radio" type="radio" value="21" onClick="usahamu()" disabled=""/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsiwirausaha" class="text" disabled="" />
				</span> 
				</li>

				<li id="li_4" >
				<label class="description" for="gaji">5. Berapa gaji pertama anda? </label>
				<span>
					<input name="gaji" class="element radio" type="radio" value="1" onClick="gajimu()" />
					<label class="choice" > kurang dari 1 Juta</label>
					<input name="gaji" class="element radio" type="radio" value="2" onClick="gajimu()"/>
					<label class="choice" >1 Juta - 2 Juta</label>
					<input name="gaji" class="element radio" type="radio" value="3" onClick="gajimu()"/>
					<label class="choice" >2 Juta - 3 Juta</label>
					<input name="gaji" class="element radio" type="radio" value="4" onClick="gajimu()"/>
					<label class="choice" >3 Juta - 4 Juta</label>
					<input name="gaji" class="element radio" type="radio" value="5" onClick="gajimu()"/>
					<label class="choice" >4 Juta - 5 Juta</label>
					<input name="gaji" class="element radio" type="radio" value="6" onClick="gajimu()"/>
					<label class="choice" > lebih dari 5 Juta </label>
					<input name="gaji" class="element radio" type="radio" value="7" onClick="gajimu()"/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsigaji" class="text" disabled="" />
				</span> 
				</li>

				<li id="li_5" >
				<label class="description" for="status">6. Bagaimana status badan hukum organisasi tempat bekerja? </label>
				<span>
					<input name="status" class="element radio" type="radio" value="1" onClick="statusmu()" />
					<label class="choice" >Pemerintah</label>
					<input name="status" class="element radio" type="radio" value="2" onClick="statusmu()"/>
					<label class="choice" >Pemda</label>
					<input name="status" class="element radio" type="radio" value="3" onClick="statusmu()"/>
					<label class="choice" >BUMN/BUMD</label>
					<input name="status" class="element radio" type="radio" value="4" onClick="statusmu()"/>
					<label class="choice" >PMA</label>
					<input name="status" class="element radio" type="radio" value="5" onClick="statusmu()"/>
					<label class="choice" >Swasta/Nasional</label>
					<input name="status" class="element radio" type="radio" value="6" onClick="statusmu()"/>
					<label class="choice" >Yayasan</label>
					<input name="status" class="element radio" type="radio" value="7" onClick="statusmu()"/>
					<label class="choice" >Wiraswasta</label>
					<input name="status" class="element radio" type="radio" value="8" onClick="statusmu()"/>
					<label class="choice" >Profesional</label>
					<input name="status" class="element radio" type="radio" value="9" onClick="statusmu()"/>
					<label class="choice" >Internasional</label>
					<input name="status" class="element radio" type="radio" value="10" onClick="statusmu()"/>
					<label class="choice" >Melanjutkan ke Perguruan Tingi</label> </br> 
					Prodi :  
					<input type="text" name="opsistatus" class="text" disabled="" /> </br>
					Universitas / PT : 
					<input type="text" name="opsistatus2" class="text" disabled="" /> </br></br>
					<b>5.1 Apabila anda ingin melanjutkan S1/S2/S3, maka anda melanjutkan di :</b></br>
					Prodi :  
					<input type="text" name="opsistatus3" class="text" /> </br>
					Universitas / PT : 
					<input type="text" name="opsistatus4" class="text" />
				</span> 
				</li>

				<li id="li_6" >
				<label class="description" for="proses">7. Bagaimana proses seleksi yang anda alami dalam memperoleh pekerjaan?</label>
				<span>
					<input name="proses" class="element radio" type="radio" value="1" onClick="prosesmu()" />
					<label class="choice" >Tes Seleksi</label>
					<input name="proses" class="element radio" type="radio" value="2" onClick="prosesmu()"/>
					<label class="choice" >Wawancara</label>
					<input name="proses" class="element radio" type="radio" value="3" onClick="prosesmu()"/>
					<label class="choice" >Transkrip</label>
					<input name="proses" class="element radio" type="radio" value="4" onClick="prosesmu()"/>
					<label class="choice" >Magang</label>
					<input name="proses" class="element radio" type="radio" value="5" onClick="prosesmu()"/>
					<label class="choice" >Tanpa Seleksi</label>
					<input name="proses" class="element radio" type="radio" value="6" onClick="prosesmu()"/>
					<label class="choice" >Lainnya</label> <input type="text" name="opsiproses" class="text" disabled="" />
				</span> 
				</li>

				<li id="li_7" >
				<label class="description" for="sesuai">8. Menurut anda, Bagaimana kesesuaian okupasi/jabatan saat ini dengan jenjang pendidikan?</label>
				<span>
					<input name="sesuai" class="element radio" type="radio" value="1"/>
					<label class="choice" >Sangat Sesuai</label>
					<input name="sesuai" class="element radio" type="radio" value="2"/>
					<label class="choice" >Sesuai</label>
					<input name="sesuai" class="element radio" type="radio" value="3"/>
					<label class="choice" >Cukup Sesuai</label>
					<input name="sesuai" class="element radio" type="radio" value="4"/>
					<label class="choice" >Kurang Sesuai</label>
					<input name="sesuai" class="element radio" type="radio" value="5"/>
					<label class="choice" >Tidak Sesuai</label>
					<input name="sesuai" class="element radio" type="radio" value="6"/>
					<label class="choice" >Sangat Tidak Sesuai</label>
				</span> 
				</li>

				<li id="li_8" >
				<label class="description" for="relevan">9. Menurut anda, Bagaimana relevansi dan kurikulum program studi dengan pekerjaan saat ini?</label>
				<span>
					<input name="relevan" class="element radio" type="radio" value="1"/>
					<label class="choice" >Sangat Sesuai</label>
					<input name="relevan" class="element radio" type="radio" value="2"/>
					<label class="choice" >Sesuai</label>
					<input name="relevan" class="element radio" type="radio" value="3"/>
					<label class="choice" >Cukup Sesuai</label>
					<input name="relevan" class="element radio" type="radio" value="4"/>
					<label class="choice" >Kurang Sesuai</label>
					<input name="relevan" class="element radio" type="radio" value="5"/>
					<label class="choice" >Tidak Sesuai</label>
					<input name="relevan" class="element radio" type="radio" value="6"/>
					<label class="choice" >Sangat Tidak Sesuai</label>
				</span> 
				</li>


				<li id="li_9" >
				<label class="description" for="tunggu">10. Berapa lama waktu tunggu anda untuk mendapatkan pekerjaan pertama kalinya? </label>
				<span>
					<input name="tunggu" class="element radio" type="radio" value="1"/>
					<label class="choice" >Sebelum Wisuda</label>
					<input name="tunggu" class="element radio" type="radio" value="2"/>
					<label class="choice" >kurang dari 3 bulan setelah wisuda</label>
					<input name="tunggu" class="element radio" type="radio" value="3"/>
					<label class="choice" >kurang dari 6 bulan setelah wisuda</label>
					<input name="tunggu" class="element radio" type="radio" value="4"/>
					<label class="choice" >lebih dari 1 tahun setelah wisuda</label>	
				</span> 
				</li>
				
				<li class="buttons">
					<input class="button_text" type="submit" name="selanjutnya" value="selanjutnya" />
				</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>