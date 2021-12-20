// import {Notes} from "./component/Note";
const Note=()=>{
     return(
          <div className="container">
               <h3>My Note</h3>
               <form method="post" role ="form" action="api/submit.php">
                    <div >
                         <input type="text" className="text_input" name="text_input"></input>
                    </div>
                    <button className="btn btn-primary" type="submit">Take note</button>
               </form>
          </div>
     )
}
 

function App() {
     return(
          <Note />
     );
};
ReactDOM.render(<App />, document.getElementById("container"));

