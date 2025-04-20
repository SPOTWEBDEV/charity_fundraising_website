let index = 0;
let bank_details = [
         {
                  id: 1,
                  name: 'H.E.O EZIOKWU FOUNDATION NIG LTD',
                  number: '5070998183',
                  bank_name: 'ZENITH BANK',
                  typeOf: 'Nigeira'

         },
         {
                  id: 2,
                  name: 'H.E.O EZIOKWU FOUNDATION NIG LTD',
                  number: '5070998183',
                  bank_name: 'ZENITH BANK',
                  typeOf: 'Usa Account'

         },
         {
                  id: 0,
                  name: 'H.E.O EZIOKWU FOUNDATION NIG LTD',
                  number: '5080241271',
                  bank_name: 'ZENITH BANK',
                  typeOf: 'Europe Account'

         }
]

function displayAccount(bank_details) {

         let accountdetail = document.querySelector('.accountdetail > p')
         let accountNumber = document.querySelector('.accountNumber')

         accountdetail.innerHTML = `${bank_details[index].name} --  ${bank_details[index].typeOf} Account`
         accountNumber.innerHTML = `${bank_details[index].number}`



}
displayAccount(bank_details)