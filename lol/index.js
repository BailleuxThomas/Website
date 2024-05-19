require("dotenv").config();

var https = require("https");
var http = require("http");
let output = [""];

const key = process.env.LOL_API_KEY;
const URLKEY = "?api_key=";
const port = process.env.PORT;

const EU = "https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/";
const NA1 = "https://na1.api.riotgames.com/lol/league/v4/entries/by-summoner/";

// <= PRO =>
const TFBLADE = "KL0E7Za3_sU4sz0wnrAULo1nmn1bGrglKauxXzQJDGRYf7g";
// <= IRL =>
const Thomas = "Y7u-jhyalsPFf837WR_IDdkVMJpOTiXfBzL_zIWHJx4gogU";
const John = "WiSkv48vfWTTgDvsfwwTVyd5nSSUCLGLcJBvmh4CgKjQt0A";
const MaximeG = "yvhAEUJP7ZkgltFrjYrgv8zEFG5HrvOVa02x0giZU7Nqjq0";
const David = "bw7VeEAioRND85tOPglamSy-LiNwZiiBgmf4W39NEFVRMH4";
const MaximeH = "KVhyYg1tv5pF9YmW0n7wsG9hosX6dhxUPwKsUMI9F5PBwBg";
const uruløki = "gIgCE3-HL4mk4k-p7xPfSG2oB4mom_U7yzQsFF4le3kmiL0";
const Noralechat = "ZwppKyJWQFMXWR8HAE1WHuEDOvsIQPFsN4undCSEkj2MirE";
const Alvildia = "hQRzWJVOUQvZvDmpbQAb4LBI8i-xL9rnCH9uiLso3_oKZB8";
const mistergg13 = "MkgUHi06ZHbB_OPNrL5L-dGReEtx4PVeu7cse3LfNrZ6kjY";
const seb = "v6Oqotnn3wmjSEvNvi_gTrn3NMXt6L8XQHgsiN5j77Gh_aE";
const Jihao = "uzRph2533pWX-vyENQkIVqdpqt4pl3fFyMjPfE754uiHpOMn";
const Jiahao2 = "Z217nK-Ra1gUmqe1jGWy-THiWfO9jNHMRYXvAyS5fK-5hp2l";
const Axel = "j76Vy43vJRGzdi8yCpjby1xCPPckxoCaQOrSr32rXJXyt3k";

// Doesn't work when you put multiple players :(
const PLAYERID = [
  Thomas,
  MaximeG,
  David,
  MaximeH,
];
PLAYERID.forEach((id) => {
  const responses = [];
  https.get(EU + id + URLKEY + key, (rr) => {
    rr.on("data", (chunk) => {
      responses.push(JSON.parse(chunk));
      console.log(responses);
    });
    rr.on("end", () => {
      responses.forEach((item) => {
        for (let i = 0; i < item.length; i++) {
          output +=
            "Name : " +
            item[i].summonerName +
            " League : " +
            item[i].queueType +
            "\n\tRank : " +
            item[i].tier +
            " " +
            item[i].rank +
            " " +
            item[i].leaguePoints +
            " LP Nombre de victoires : " +
            item[i].wins +
            " Nombre de defaites : " +
            item[i].losses +
            " \n\n";
        }
      });
    });
  });
});

var server = http
  .createServer(function (req, res) {
    res.write(output); //write a response to the client
    res.end(); //end the response
  })
  .listen('passenger');
