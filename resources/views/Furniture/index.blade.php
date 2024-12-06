<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/Style.css" />
  </head>
  <body>
    <div class="landing-page">
      <div class="div">
        <div class="overlap">
          <div class="banner-aditional">
            <div class="overlap-group">
              <div class="banner-information">
                <div class="frame"><div class="text-wrapper">Daftar Sekarang</div></div>
                <p class="p">Segera daftar untuk mendapatkan promo terbaik sekarang!</p>
                <p class="dapatkan-potongan">Dapatkan Potongan Harga 30%<br />Untuk Pembelian Pertama</p>
                <div class="text-wrapper-2">Client Reviews</div>
              </div>
              <div class="image">
                <div class="overlap-group-2">
                  <img class="unsplash-bpg" src="gambar/unsplash_bpg-ngqrpc8.png" />
                  <div class="rectangle"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-section">
            <div class="text-wrapper-3">Produk Katalog</div>
            <button class="button"><div class="text-wrapper-4">Lihat Semua</div></button>
            <div class="product">
              @foreach ($Furniture as $row)
              <div class="product-item-2">
                <div class="items">
                <img class="img" src="storage/{{ $row->picture }}" />
                  <div class="group">
                    <div class="ellipse-wrapper"><div class="ellipse-3"></div></div>
                    <div class="div-wrapper"><div class="ellipse-4"></div></div>
                    <div class="overlap-group-wrapper">
                      <div class="overlap-group-3">
                        <div class="group-2"><div class="ellipse-2"></div></div>
                        <img class="remix-icons-line" src="img/check-line-6.svg" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-label-3">
                <div class="text-wrapper-6">{{ $row->title }}</div>
                <div class="text-wrapper-7">{{ $row->price }}</div>
                </div>
              </div>
              @endforeach
          <div class="inspiration-section">
            <div class="overlap-3">
              <div class="overlap-4">
                <div class="koleksi-furniture">Koleksi Furniture<br />Untuk Inpirasi Ruanganmu</div>
                <div class="description">
                  <div class="text-wrapper-9">Stocksund Inspiration Fullset</div>
                  <div class="text-wrapper-10">Rp. 12.780.000</div>
                  <p class="berikut-ini-adalah">
                    Berikut ini adalah sebuah desain ruang tv keluarga yang digunakan untuk berkumpul dan bersantai.<br />Sofa
                    STOCKSUND menawarkan banyak ruang sehingga setiap anggota keluarga dan tamu<br />mendapatkan tempat
                    duduk. Sofa ini sangat nyaman dan dapat bertahan hingga bertahun-tahun
                  </p>
                </div>
                <div class="image-detail">
                  <div class="overlap-5">
                  </div>
                </div>
              </div>
              <div class="detail-information">
                <div class="overlap-6">
                  <div class="image-wrapper"><img class="image-2" src="gambar/Stocksound.png" /></div>
                  <div class="text-wrapper-11">Stocksund Sofa</div>
                  <div class="text-wrapper-12">Warna</div>
                  <div class="group-8"><div class="ellipse"></div></div>
                  <div class="group-9"><div class="ellipse-8"></div></div>
                  <div class="group-10">
                    <div class="overlap-group-3">
                      <div class="group-2"><div class="ellipse-9"></div></div>
                      <img class="remix-icons-line" src="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="features-section">
            <div class="feature-one">
              <div class="text-wrapper-13">Pengiriman Cepat<br />dan Aman</div>
              <p class="text-wrapper-14">
                Setiap produk yang kami kirim akan selalu<br />datang tepat waktu. Produk anda akan<br />kami jaga
                sampai anda terima.
              </p>
              <div class="img-wrapper"><img class="img-2" src="gambar/Vector.png - Shortcut.lnk" /></div>
            </div>
            <div class="feature-three">
              <p class="text-wrapper-13">Produk Daur Ulang<br />dan Ramah Lingkungan</p>
              <p class="text-wrapper-14">
                Produk yang kami sediakan berasal dari<br />produk daur ulang namun tetap<br />dengan kualitas terbaik.
              </p>
              <div class="img-wrapper"><img class="img-2" src="c:\Users\USER\OneDrive\Dokumen\pts mk3b\remix-icons\fill\others\Vector.png" /></div>
            </div>
            <div class="feature-two">
              <div class="text-wrapper-13">Design Kekinian<br />Kualitas Terbaik</div>
              <div class="text-wrapper-15">Testimoni</div>
              <p class="text-wrapper-14">
                Produk yang tersedia dijamin kualitasnya.<br />Dengan design yang mengikuti<br />perkembangan interior
                masa kini.
              </p>
              <div class="img-wrapper"><img class="img-2" src="gambar/Vector.png" /></div>
            </div>
          </div>
          <div class="rectangle-2"></div>
          <div class="text-wrapper-16">Meja</div>
          <div class="text-wrapper-17"> <a href="Page2.html">Kursi</a></div>
          <div class="text-wrapper-18"> <a href="Page3.html">Sofa</a></div>
          <div class="text-wrapper-19"> <a href="Page4.html">Kasur</a></div>
          <div class="text-wrapper-20"> <a href="Page5.html">Lampu</a></div>
          <div class="text-wrapper-21"> <a href="Page6.html">Lainnya</a></div>
          <img class="group-11" src="gambar/Group 174.png" />
          <img class="group-12" src="gambar/Group 174.png" />
          <div class="rectangle-5"></div>
          <img class="vector" src="gambar/PLUS.png" />
          <div class="rectangle-6"></div>
          <img class="vector-2" src="gambar/PLUS.png" />
          <img class="group-13" src="gambar/Group 174.png" />
          <div class="rectangle-7"></div>
          <img class="vector-3" src="gambar/PLUS.png" />
          <div class="rectangle-8"></div>
          <img class="vector-4" src="gambar/PLUS.png" />
          <div class="rectangle-9"></div>
          <img class="vector-5" src="gambar/PLUS.png" />
          <div class="rectangle-10"></div>
          <img class="vector-6" src="gambar/PLUs.png" />
          <img class="group-14" src="gambar/Group 174.png" />
          <img class="group-15" src="gambar/Group 174.png" />
          <img class="group-16" src="gambar/Group 174.png" />
        </div>
        <div class="overlap-wrapper">
          <div class="overlap-7">
            <img class="unsplash" src="gambar/unsplash_jaxs8tk5iww.png" />
            <div class="group-17">
              <div class="overlap-8">
                <div class="group-18">
                  <div class="overlap-group-4"><img class="ellipse-10" src="gambar/ellipse-1131.png" /></div>
                </div>
                <div class="group-19">
                  <div class="text-wrapper-22">Ibuk Sukijan</div>
                  <div class="text-wrapper-39">Ibu Rumah Tangga</div>
                </div>
                <p class="text-wrapper-24">
                  “Makasih Furnix, aku sekarang berasa tinggal di apartment karena barang-barang yang terlihat mewah“
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="overlap-9">
          <div class="group-21">
            <div class="overlap-7">
              <img class="unsplash" src="gambar/unsplash_h2_3dL9yLpU.png" />
              <div class="group-17">
                <div class="overlap-10">
                  <div class="group-18">
                    <div class="overlap-group-5"><img class="ellipse-10" src="gambar/ellipse-1131-2.png" /></div>
                  </div>
                  <div class="group-22">
                    <div class="text-wrapper-25">Mpok Ina</div>
                    <div class="text-wrapper-39">Karyawan Swasta</div>
                  </div>
                  <p class="text-wrapper-24">“Sangat terjangkau untuk kantong saya yang tidak terlalu banyak“</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="overlap-11">
          <div class="group-23">
            <div class="overlap-12">
              <div class="group-21">
                <div class="overlap-group-6">
                  <img class="unsplash" src="gambar/unsplash__HqHX3LBN18.png" />
                </div>
              </div>
              <div class="group-24">
                <div class="overlap-13">
                  <div class="group-18">
                    <div class="overlap-group-7"><img class="ellipse-10" src="gambar/ellipse-1131-3.png" /></div>
                  </div>
                    <div class="group-25">
                      <div class="text-wrapper-26">Bang Upin</div>
                      <div class="text-wrapper-23">Pedagang Asongan</div>
                    </div>
                  <p class="text-wrapper-24">
                    “Terimakasih banyak, kini ruanganku menjadi lebih mewah dan terlihat mahal“
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="group-26">
          <div class="overlap-14">
            <div class="group-27">
              <div class="div-2">
                <div class="div-2">
                  <div class="group-28">
                    <div class="text-wrapper-27">Beranda</div>
                    <div class="text-wrapper-28">Produk</div>
                    <div class="text-wrapper-29">Inspirasi</div>
                    <div class="text-wrapper-30">Contact</div>
                  </div>
                </div>
                <div class="login-sign-up">
                  <div class="dropdown">
                    <div class="text">Indonesian (IDN)</div>
                    <img class="img-3" src="gambar/Icons.png" />
                  </div>
                  <button class="frame-wrapper">
                    <div class="frame-7"><div class="text-wrapper-31"><a href="signin.html">SignIn</a></div></div>
                  </button>
                  <button class="button-2">
                    <div class="frame-8"><div class="text-wrapper-31"><a href="signup.html">SignUp</a></div></div>
                  </button>
                </div>
              </div>
              <div class="search-bar">
                <div class="overlap-group-8">
                  <div class="text-wrapper-32">cari furniture disini</div>
                  <div class="remix-icons-line-wrapper">
                    <img class="remix-icons-line-2" src="gambar/Group.png" />
                  </div>
                </div>
              </div>
              <div class="hero-text">
                <div class="overlap-15">
                  <img class="vector-7" src="gambar/Vector 1.png" />
                  <div class="buat-suasana-rumah">Buat Suasana Rumah<br />Senyaman Imajinasimu</div>
                </div>
                <p class="hidupkan-suasana">
                  Hidupkan suasana ruanganmu dengan berbagai produk dan koleksi pilihan furniture tebaik!<br />Temukan
                  furniture idamanmu sekarang
                </p>
                <div class="background-container">
                  
                </div>
              </div>
              <div class="group-32">
                <div class="group-wrapper">
                  <div class="group-34">
                    <div class="overlap-group-wrapper">
                      <div class="overlap-group-3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img class="screenshot" src="gambar/Logo.png" />
          </div>
        </div>
        <div class="group-35">
          <div class="overlap-16">
            <div class="footer-wrapper">
              <footer class="footer">
                <div class="frame-9">
                  <div class="divider"></div>
                  <div class="frame-10">
                    <div class="frame-11">
                      <div class="frame-12">
                        <div class="text-wrapper-33">Product</div>
                        <div class="text-wrapper-34">Pricing</div>
                        <div class="text-wrapper-34">Solutions</div>
                        <div class="text-wrapper-34">Education</div>
                        <div class="text-wrapper-34">Team plans</div>
                      </div>
                      <div class="frame-12">
                        <div class="text-wrapper-35">About us</div>
                        <div class="text-wrapper-36">About</div>
                        <div class="text-wrapper-36">Branding</div>
                        <div class="text-wrapper-36">Newsroom</div>
                        <div class="text-wrapper-36">Partnerships</div>
                        <div class="text-wrapper-36">Affiliates</div>
                        <div class="text-wrapper-36">careers</div>
                      </div>
                      <div class="frame-12">
                        <div class="text-wrapper-33">Help and support</div>
                        <div class="text-wrapper-34">Help center</div>
                        <div class="text-wrapper-34">Contact us</div>
                        <div class="text-wrapper-34">Privacy &amp; Terms</div>
                        <div class="text-wrapper-34">Safety information</div>
                        <div class="text-wrapper-34">Sitemap</div>
                      </div>
                      <div class="frame-12">
                        <div class="text-wrapper-33">Community</div>
                        <div class="text-wrapper-34">Angencies</div>
                        <div class="text-wrapper-34">Freelancers</div>
                        <div class="text-wrapper-34">Engineers</div>
                      </div>
                    </div>
                    <div class="frame-13">
                      <img class="img-4" src="gambar/App Store.png" /> <img class="img-4" src="gambar/Google Play.png" />
                    </div>
                  </div>
                  <div class="divider"></div>
                  <div class="group-36">
                    <div class="frame-14">
                      <div class="text-wrapper-37">@Copyright 2024</div>
                      <div class="links">
                        <div class="text-wrapper-37">Help</div>
                        <div class="text-wrapper-37">Privacy</div>
                        <div class="text-wrapper-37">Terms</div>
                      </div>
                    </div>
                    <div class="frame-15">
                      <div class="frame-16">
                        <img class="img-3" src="gambar/FB.png" />
                        <img class="social-media-logo" src="gambar/Twit.png" />
                        <img class="social-media-logo" src="gambar/IG.png" />
                      </div>
                      <div class="dropdown">
                        <div class="text-2">Indonesian (IDN)</div>
                        <img class="img-3" src="gambar/Bawh.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
            </div>
            <div class="group-37"></div>
            <div class="group-38">
              <img class="icons-outline" src="gambar/time.png" />
              <div class="inicio-qui-nes-somos">Indonesia<br />09:00 a 20:00 hours</div>
            </div>
            <div class="group-39">
              <img class="overlap-group-wrapper" src="gambar/time.png" />
              <div class="inicio-qui-nes-somos-2">myteam@gmail.com</div>
            </div>
            <div class="group-40">
              <img class="icons-fill-phone" src="gambar/Phone.png" />
              <div class="inicio-qui-nes-somos-3">123 456 7890</div>
            </div>
          </div>
        </div>
      </div>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </div>
  </body>
</html>
