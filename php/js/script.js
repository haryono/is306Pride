/* Author:

*/

$('#modalContactForm').modal({
	show: false,
	backdrop: true,
	animation: true
});

$(function() {
	var areas = [
		"D01 Boat Quay / Raffles Place",
		"D02 Chinatown / Tanjong Pagar",
		"D03 Alexandra / Commonwealth",
		"D04 Harbourfront / Telok Blangah",
		"D05 Buona Vista / West Coast",
		"D06 City Hall / Clarke Quay",
		"D07 Beach Road / Bugis / Rochor",
		"D08 Farrer Park / Serangoon Rd",
		"D09 Orchard / River Valley",
		"D10 Tanglin / Holland",
		"D11 Newton / Novena",
		"D12 Balestier / Toa Payoh",
		"D13 Macpherson / Potong Pasir",
		"D14 Eunos / Geylang / Paya Lebar",
		"D15 East Coast / Marine Parade",
		"D16 Bedok / Upper East Coast",
		"D17 Changi Airport / Changi Village",
		"D18 Pasir Ris / Tampines",
		"D19 Hougang / Punggol / Sengkang",
		"D20 Ang Mo Kio / Bishan / Thomson",
		"D21 Clementi / Upper Bukit Timah",
		"D22 Boon Lay / Jurong / Tuas",
		"D23 Bukit Batok / Bukit Panjang",
		"D24 Choa Chu Kang / Tengah",
		"D25 Admiralty / Woodlands",
		"D26 Mandai / Upper Thomson",
		"D27 Sembawang / Yishun",
		"D28 Seletar / Yio Chu Kang"
	];

	var type = [
		"HDB",
		"Executive Condominium",
		"Private Condominium",
		"Landed"
	];
	$( "#area" ).autocomplete({
		source: areas
	});
	$( "#type").autocomplete({
		source: type
	})
});




