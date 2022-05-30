//DOM selctors
const searchBarArtist = document.getElementById("search-bar-artist");
const searchBarLyrics = document.getElementById("search-bar-lyrics");
const searchButtonLyrics = document.getElementById("button-search-lyrics");
//Adding eventlisteners
// searchButtonLyrics.addEventListener("click", () => {
// 	const searchLyricsArtist = searchBarArtist.value.replace(/ /g, "_");
// 	const searchLyricsSong = searchBarLyrics.value.replace(/ /g, "_");

// 	fetch(
// 		`http://localhost:5500/https://api.lyrics.ovh/v1/${searchLyricsArtist}/${searchLyricsSong}`
// 	)
// 		.then((response) => response.json())
// 		.then((data) => {
// 			console.log(lyrics);
// 		})
// 		.catch(() => console.log("404 very bad"));
// });
//Locally stored lyrics for current set
const lyricsArray = [];
//Locally stored info for recent sets div
const setArray = [];

//Global variables
let setID;

//Search for an artist and get the latest setlist and lyrics for each song
const searchForArtist = (inputArtist) => {
	var myHeaders = new Headers();
	myHeaders.append("x-api-key", "b8jGo6ebMjXIF9NUay9n_VqIy2gX2Sb2u0y9");
	myHeaders.append("Accept", "application/json");

	var requestOptions = {
		method: "GET",
		headers: myHeaders,
		redirect: "follow",
	};
	const searchArtist = inputArtist.replace(/ /g, "-");

	fetch(
		`http://localhost:5500/https://api.setlist.fm/rest/1.0/search/setlists?artistName=${searchArtist}&sort=relevance&p=1`,
		requestOptions
	)
		.then((response) => response.json())
		.then((result) => {
			console.log(result);
			getSongNames(result);
		})
		.catch((error) => console.log("error", error));

	const getSongNames = (result) => {
		let setNumber = 0;

		//Check if a setlist has any songs AND if there's more than 5 songs
		for (const [index, setlist] of result.setlist.entries()) {
			if (
				setlist.sets.set[0] &&
				setlist.sets.set[0].song.length > 5 &&
				setlist.artist.name === inputArtist
			) {
				setNumber = index;
				break;
			}
		}
		setID = result.setlist[setNumber].id;
		console.log(setID);
		// const songs = result.setlist[setNumber].sets.set[0].song;
		// console.log(songs);
		// songs.forEach((song, index) => {
		// 	getLyrics(song.name, searchArtist, index);
		// });
	};
};
searchForArtist("Drake");

//Gets lyrics from a setlist
const getLyrics = (song, artist, index) => {
	const searchSong = song.replace(/ /g, "_");
	const searchArtist = artist.replace(/ /g, "_");
	console.log(searchSong, searchArtist);
	fetch(
		`http://localhost:5500/https://api.lyrics.ovh/v1/${searchArtist}/${searchSong}`
	)
		.then((response) => response.json())
		.then((data) => {
			const lyrics = { name: song, id: index, data: data.lyrics };
			if (!lyrics.data) {
				lyrics.data = "Couldn't find lyrics for this song :(";
			}
			console.log(lyrics);
			lyricsArray.push(lyrics);
		})
		.catch(() => console.log("404 very bad"));
};

//Useful function for string parsing
const toTitleCase = (phrase) => {
	return phrase
		.toLowerCase()
		.split(" ")
		.map((word) => word.charAt(0).toUpperCase() + word.slice(1))
		.join(" ");
};

//Gets the latest sets from setlisFM api
const searchLastUpdated = () => {
	let yesterday = new Date();
	yesterday.setDate(yesterday.getDate() - 1);
	const yyyy = yesterday.getFullYear();
	let mm = yesterday.getMonth() + 1; // Months start at 0!
	let dd = yesterday.getDate();

	if (dd < 10) dd = "0" + dd;
	if (mm < 10) mm = "0" + mm;

	yesterday = dd + "-" + mm + "-" + yyyy;

	console.log(yesterday);

	var myHeaders = new Headers();
	myHeaders.append("x-api-key", "b8jGo6ebMjXIF9NUay9n_VqIy2gX2Sb2u0y9");
	myHeaders.append("Accept", "application/json");

	var requestOptions = {
		method: "GET",
		headers: myHeaders,
		redirect: "follow",
	};

	fetch(
		`http://localhost:5500/https://api.setlist.fm/rest/1.0/search/setlists?date=${yesterday}`,
		requestOptions
	)
		.then((response) => response.json())
		.then((result) => {
			console.log(result.setlist);
			getSetInfo(result.setlist);
		})
		.catch((error) => console.log("error", error));

	const getSetInfo = (setlists) => {
		for (let i = 0; i < 10; i++) {
			const setInfo = {
				id: setlists[i].id,
				artistName: setlists[i].artist.name,
				venue: setlists[i].venue.name,
				city: setlists[i].venue.city.name,
			};
			setArray.push(setInfo);
		}
	};
};

// searchLastUpdated();
const saveFavoriteSet = () => {
	//Lägg till XMLRequest för att köra ett php-skript
};
