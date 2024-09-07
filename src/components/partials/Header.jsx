import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';


const Header = () => {
    return (
        <>
            <Navbar expand="lg" className="bg-body-tertiary shadow-lg">
                <Container>
                    <Navbar.Brand href="#home">نوو دکور</Navbar.Brand>
                    <Navbar.Toggle aria-controls="basic-navbar-nav" />
                    <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="me-auto">
                            <Nav.Link href="#home">محصولات</Nav.Link>
                            <Nav.Link href="#link">درباره‌ما</Nav.Link>
                            <Nav.Link href="#link">تماس با ما</Nav.Link>
                        </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
        </>
    )
}

export default Header;