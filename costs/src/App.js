import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import Home from './components/pages/Home';
import Company from './components/pages/Company';
import Contact from './components/pages/Contact';
import NewProject from './components/pages/NewProject';
import Container from './components/layout/Container'

function App() {
  return (
    <Router>
      <ul>
        <Link to="/">Home</Link>
        <Link to="/contact">Contact</Link>
        <Link to="/company">Company</Link>
        <Link to="/newproject">New Project</Link>
      </ul>
      <Routes>
        <Route
          exact path="/"
          element={
            <Container customClass="min-height">
              <Home />
            </Container>
          } />
        <Route
          exact path="/company"
          element={
            <Container customClass="min-height">
              <Company />
            </Container>
          } />
        <Route
          exact path="/contact"
          element={
            <Container customClass="min-height">
              <Contact />
            </Container>
          } />
        <Route
          exact path="/newproject"
          element={
            <Container customClass="min-height">
              <NewProject />
            </Container>
          } />

      </Routes>
      <p>Footer</p>
    </Router>
  );
}

export default App;
