<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUBES TBA</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap");
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-200">
  <div class="container bg-slate-100 font-[Poppins] h-max">

    <hr class="w-120 h-3 mx-auto my-1 bg-gray-100 border-0 rounded md:my-1 dark:bg-gray-700">
    <div class="my-4 mx-4">
      <br>
      <b> Halo! Selamat datang di program pengecekan validasi kalimat dalam BAHASA indonesia!</b>
      <br>
      Berikut adalah daftar kata yang dapat dicek pada lexical analyzer ini :
      <br>
    </div>

    <!-- Table -->
    <div class="container">
      <div class="flex flex-wrap ">
        <div class="w-full px-2">
          <div class="overflow-x-auto rounded-lg">
            <table class="table-auto w-full h-1">
              <thead>
                <tr class=" bg-gradient-to-tr from-gray-600 to-gray-900 text-center">
                  <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-l border-transparent
                           ">
                    Subjek
                  </th>
                  <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                    Predikat
                  </th>
                  <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                    Objek
                  </th>


                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           ">
                    aku
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                    membeli
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                    buku
                  </td>

                </tr>

                <tr>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           ">
                    kamu
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                    melihat
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                    motor
                  </td>

                </tr>
                <tr>


                </tr>
                <tr>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           ">
                    ibu
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                    mencuri
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                    baju
                  </td>

                </tr>
                <tr>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           ">
                    ayah
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                    menyukai
                  </td>
                  <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                    laptop
                  </td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="flex justify-center py-4 my-4">
      <form class="flex" method="post">
        <label for="input" class="sr-only">input</label>
        <div class="w-80">

          <input type="text" name="sentence" class="w-80 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Masukan Kalimat..." required="">

        </div>
        <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800  rounded-md">
          submit
        </button>

      </form>
    </div>




    <?php
phpinfo();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sentence = $_POST["sentence"];
      $inputString = strtolower($sentence) . '#';

      $alphabetList = range('a', 'z');
      $stateList = [
        'q0', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10',
        'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
        'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30',
        'q31', 'q32', 'q33', 'q34', 'q35', 'q36', 'q37', 'q38', 'q40', 'q41'
      ];

      $transition_table = [];

      foreach ($stateList as $state) {
        foreach ($alphabetList as $alphabet) {
          $transition_table[$state][$alphabet] = 'error';
        }
        $transition_table[$state]['#'] = 'error';
        $transition_table[$state][' '] = 'error';
      }


      //start
      $transition_table['q0'][' '] = 'q0';

      //finish 
      $transition_table['q4']['#'] = 'accept';
      $transition_table['q4'][' '] = 'q41';

      $transition_table['q41']['#'] = 'accept';
      $transition_table['q41'][' '] = 'q41';


      // =================================== SUBJECT ===================================

      // untuk aku
      $transition_table['q0']['a'] = 'q30';
      $transition_table['q30']['k'] = 'q31';
      $transition_table['q31']['u'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['a'] = 'q30';

      // untuk kamu
      $transition_table['q0']['k'] = 'q10';
      $transition_table['q10']['a'] = 'q11';
      $transition_table['q11']['m'] = 'q12';
      $transition_table['q12']['u'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['k'] = 'q10';

      // untuk dia
      $transition_table['q0']['d'] = 'q2';
      $transition_table['q2']['i'] = 'q3';
      $transition_table['q3']['a'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['d'] = 'q10';

      // untuk ibu
      $transition_table['q0']['i'] = 'q1';
      $transition_table['q1']['b'] = 'q2';
      $transition_table['q2']['u'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['i'] = 'q20';

      // untuk ayah
      $transition_table['q0']['a'] = 'q30';
      $transition_table['q30']['y'] = 'q31';
      $transition_table['q31']['a'] = 'q32';
      $transition_table['q32']['h'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['a'] = 'q30';

      // ==================================== VERB =====================================


      // untuk melihat
      $transition_table['q0']['m'] = 'q19';
      $transition_table['q19']['e'] = 'q20';
      $transition_table['q20']['l'] = 'q21';
      $transition_table['q21']['i'] = 'q22';
      $transition_table['q22']['h'] = 'q23';
      $transition_table['q23']['a'] = 'q24';
      $transition_table['q24']['t'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['m'] = 'q19';

      // untuk membawa
      $transition_table['q0']['m'] = 'q19';
      $transition_table['q19']['e'] = 'q20';
      $transition_table['q20']['m'] = 'q21';
      $transition_table['q21']['b'] = 'q22';
      $transition_table['q23']['w'] = 'q24';
      $transition_table['q24']['a'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['m'] = 'q19';

      // untuk membeli
      $transition_table['q0']['m'] = 'q19';
      $transition_table['q19']['e'] = 'q20';
      $transition_table['q20']['m'] = 'q21';
      $transition_table['q21']['b'] = 'q22';
      $transition_table['q22']['e'] = 'q23';
      $transition_table['q23']['l'] = 'q24';
      $transition_table['q24']['i'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['m'] = 'q19';

      // untuk membeli
      $transition_table['q0']['m'] = 'q19';
      $transition_table['q19']['e'] = 'q20';
      $transition_table['q20']['n'] = 'q21';
      $transition_table['q21']['c'] = 'q22';
      $transition_table['q22']['u'] = 'q23';
      $transition_table['q23']['r'] = 'q24';
      $transition_table['q24']['i'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['m'] = 'q19';

      // untuk menyukai
      $transition_table['q0']['m'] = 'q19';
      $transition_table['q19']['e'] = 'q20';
      $transition_table['q20']['n'] = 'q21';
      $transition_table['q21']['y'] = 'q22';
      $transition_table['q22']['u'] = 'q23';
      $transition_table['q23']['k'] = 'q24';
      $transition_table['q24']['a'] = 'q25';
      $transition_table['q25']['i'] = 'q4';
      $transition_table['q4'][' '] = 'q41';
      $transition_table['q41']['m'] = 'q19';

      // =================================== OBJEKJECT ====================================

      // untuk motor
      $transition_table['q0']['m'] = 'q19';
      $transition_table['q19']['o'] = 'q20';
      $transition_table['q20']['t'] = 'q21';
      $transition_table['q21']['o'] = 'q22';
      $transition_table['q22']['r'] = 'q4';

      // untuk buku
      $transition_table['q0']['b'] = 'q33';
      $transition_table['q33']['u'] = 'q34';
      $transition_table['q34']['k'] = 'q35';
      $transition_table['q35']['u'] = 'q4';

      // untuk baju
      $transition_table['q0']['b'] = 'q33';
      $transition_table['q33']['a'] = 'q34';
      $transition_table['q34']['j'] = 'q35';
      $transition_table['q35']['u'] = 'q4';

      // untuk laptop
      $transition_table['q0']['l'] = 'q15';
      $transition_table['q15']['a'] = 'q16';
      $transition_table['q16']['p'] = 'q17';
      $transition_table['q17']['t'] = 'q18';
      $transition_table['q18']['o'] = 'q19';
      $transition_table['q19']['p'] = 'q4';
      //===============================================================================

      //new token
      $transition_table['q41']['d'] = 'q2';
      $transition_table['q41']['i'] = 'q1';
      $transition_table['q41']['r'] = 'q5';
      $transition_table['q41']['o'] = 'q7';

      $transition_table['q41']['k'] = 'q10';
      $transition_table['q41']['l'] = 'q15';
      $transition_table['q41']['m'] = 'q19';

      $transition_table['q41']['a'] = 'q30';
      $transition_table['q41']['b'] = 'q33';

      $idxChar = 0;
      $currenToken = ' ';
      $state = 'q0';
      while ($state != 'accept') {
        $currenChar = $inputString[$idxChar];
        $currenToken .= $currenChar;
        $state = $transition_table[$state][$currenChar];
        if ($state == 'q4') {
          echo '<div class="flex">&nbsp &nbsp Current token &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : ' . $currenToken . ' ==>  <p class="text-green-700 font-extrabold">   VALID <p/>  </div> ';
          $currenToken = ' ';
        }
        if ($state == 'error') {
          echo '&nbsp &nbsp Input tidak valid!<br>';
          echo '<div class="flex">&nbsp &nbsp Current token &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : ' . $currenToken . ' ==> <p class="text-red-700 font-extrabold">   ERROR <p/> </div>';
          break;
        }
        $idxChar++;
      }
      if ($state == 'accept') {
        echo '<div class="flex">&nbsp &nbsp Semua token di input &nbsp : ' . $sentence . ' ==>  <p class="text-green-700 font-extrabold"> VALID <p/> </div>';
      }

      // PARSER GRAMMAR CHEKER

      $tokens = explode(' ', strtolower($sentence));
      $tokens[] = 'EOS';

      //symbols definition
      $non_terminals = ['S', 'SUBJEK', 'PREDIKAT', 'OBJEK'];
      $terminals = ['ayah', 'kamu', 'aku', 'dia', 'ibu', 'menyukai', 'mencuri', 'membeli', 'melihat', 'motor', 'buku', 'laptop', 'baju'];

      //parse table definition
      $parse_table = [];

      $parse_table['S']['ayah'] = ['SUBJEK', 'PREDIKAT', 'OBJEK'];
      $parse_table['S']['aku'] = ['SUBJEK', 'PREDIKAT', 'OBJEK'];
      $parse_table['S']['kamu'] = ['SUBJEK', 'PREDIKAT', 'OBJEK'];
      $parse_table['S']['ibu'] = ['SUBJEK', 'PREDIKAT', 'OBJEK'];
      $parse_table['S']['mencuri'] = ['error'];
      $parse_table['S']['membeli'] = ['error'];
      $parse_table['S']['melihat'] = ['error'];
      $parse_table['S']['menyukai'] = ['error'];
      $parse_table['S']['motor'] = ['error'];
      $parse_table['S']['buku'] = ['error'];
      $parse_table['S']['laptop'] = ['error'];
      $parse_table['S']['baju'] = ['error'];
      $parse_table['S']['EOS'] = ['error'];

      $parse_table['SUBJEK']['ayah'] = ['ayah'];
      $parse_table['SUBJEK']['aku'] = ['aku'];
      $parse_table['SUBJEK']['kamu'] = ['kamu'];
      $parse_table['SUBJEK']['ibu'] = ['ibu'];
      $parse_table['SUBJEK']['mencuri'] = ['error'];
      $parse_table['SUBJEK']['membeli'] = ['error'];
      $parse_table['SUBJEK']['melihat'] = ['error'];
      $parse_table['SUBJEK']['menyukai'] = ['error'];
      $parse_table['SUBJEK']['motor'] = ['error'];
      $parse_table['SUBJEK']['buku'] = ['error'];
      $parse_table['SUBJEK']['laptop'] = ['error'];
      $parse_table['SUBJEK']['baju'] = ['error'];
      $parse_table['SUBJEK']['EOS'] = ['error'];

      $parse_table['PREDIKAT']['dia'] = ['error'];
      $parse_table['PREDIKAT']['ayah'] = ['error'];
      $parse_table['PREDIKAT']['aku'] = ['error'];
      $parse_table['PREDIKAT']['kamu'] = ['error'];
      $parse_table['PREDIKAT']['ibu'] = ['error'];
      $parse_table['PREDIKAT']['mencuri'] = ['mencuri'];
      $parse_table['PREDIKAT']['membeli'] = ['membeli'];
      $parse_table['PREDIKAT']['melihat'] = ['melihat'];
      $parse_table['PREDIKAT']['menyukai'] = ['menyukai'];
      $parse_table['PREDIKAT']['motor'] = ['error'];
      $parse_table['PREDIKAT']['buku'] = ['error'];
      $parse_table['PREDIKAT']['laptop'] = ['error'];
      $parse_table['PREDIKAT']['baju'] = ['error'];
      $parse_table['PREDIKAT']['EOS'] = ['error'];

      $parse_table['OBJEK']['dia'] = ['error'];
      $parse_table['OBJEK']['ibu'] = ['error'];
      $parse_table['OBJEK']['ayah'] = ['error'];
      $parse_table['OBJEK']['kamu'] = ['error'];
      $parse_table['OBJEK']['aku'] = ['error'];
      $parse_table['OBJEK']['mencuri'] = ['error'];
      $parse_table['OBJEK']['membeli'] = ['error'];
      $parse_table['OBJEK']['melihat'] = ['error'];
      $parse_table['OBJEK']['menyukai'] = ['error'];
      $parse_table['OBJEK']['motor'] = ['motor'];
      $parse_table['OBJEK']['buku'] = ['buku'];
      $parse_table['OBJEK']['laptop'] = ['laptop'];
      $parse_table['OBJEK']['baju'] = ['baju'];
      $parse_table['OBJEK']['EOS'] = ['error'];

      //stack initialization
      $stack = [];
      $stack[] = '#';
      $stack[] = 'S';

      //input reading initialization
      $idx_token = 0;
      $symbol = $tokens[$idx_token];

      //parsing process
      try {
        while (count($stack) > 0) {
          $top = $stack[count($stack) - 1];
          echo '&nbsp &nbsp top = ' . $top . '<br>';
          echo '&nbsp &nbsp symbol = ' . $symbol . '<br>';
          if (in_array($top, $terminals)) {
            echo '&nbsp &nbsp top adalah simbol terminal<br>';
            if ($top == $symbol) {
              array_pop($stack);
              $idx_token = $idx_token + 1;
              $symbol = $tokens[$idx_token];
              if ($symbol == 'EOS') {
                echo '&nbsp &nbsp isi stack : ' . implode(' ', $stack) . '<br>';
                array_pop($stack);
              }
            } else {
              echo 'error<br>';
              break;
            }
          } elseif (in_array($top, $non_terminals)) {
            echo '&nbsp &nbsp top adalah simbol non-terminal<br>';
            if ($parse_table[$top][$symbol][0] != 'error') {
              array_pop($stack);
              $symbols_to_be_pushed = $parse_table[$top][$symbol];
              for ($i = count($symbols_to_be_pushed) - 1; $i >= 0; $i--) {
                $stack[] = $symbols_to_be_pushed[$i];
              }
            } else {
              echo '&nbsp &nbsp error<br>';
              break;
            }
          } else {
            echo '&nbsp &nbsp error<br>';
            break;
          }
          echo '&nbsp &nbsp isi stack : ' . implode(' ', $stack) . '<br>';
          if (count($stack) > 0) {
            echo '<hr class="w-80 h-2 mx-4 my-1 bg-gray-100 border-0 rounded dark:bg-gray-700">';
          }
        }
      } catch (Exception $e) {
        echo '&nbsp &nbsp Kata tidak ditemukan dalam sistem.<br>';
      }

      //conclusion
      echo '<br>';
      if ($symbol == 'EOS' && count($stack) == 0) {
        echo '<hr class="w-120 h-3 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">';
        echo '&nbsp &nbsp Input kalimat : ' . $sentence . '<br>';
        echo '<div class="flex">&nbsp &nbsp <p class="text-green-700 font-semibold"> Kalimat yang Anda masukan sesuai grammar! <p/></div>';
        echo '<hr class="w-120 h-3 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">';
      } else {
        echo '<hr class="w-120 h-3 mx-auto my-2 bg-gray-100 border-0 rounded md:my-4 dark:bg-gray-700">';
        echo '&nbsp &nbsp Error, input kalimat : ' . $sentence . '<br>';
        echo '<div class="flex">&nbsp &nbsp <p class="text-red-700 font-semibold"> Kalimat yang Anda masukan TIDAK sesuai grammar  <p/></div>';
        echo '&nbsp &nbsp atau terdapat kata yang tidak valid.<br>';
        echo '&nbsp &nbsp Silahkan cek kembali kalimat yang Anda masukan!<br>';
      }
    }
    ?>






  </div>
</body>

</html>